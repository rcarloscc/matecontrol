<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    private $public_key = "pk_live_uqHnLOVYUZ7b7er0PGSS2AdyzNoiLxCsLMeYRzgP55T65Fou0V3azMXuR";
    private $private_key = "sk_live_Oeb6WwbmK8zsA3EAiZl2kbwdo27ohu69FjqPTmrohzfJktnA0bUqgAqvG";

    public function get_product ($producto){
        $url = "https://app.recurrente.com/api/products";
        $new_p = $this->curl ($url , $producto , true);   
        if(!isset($new_p["message"])){
            return $new_p["id"];
        }else{
            Log::info("Respuesta:  $new_p \nEnvio: $producto");
        }
        
    }

    public function get_user ($user){
        $url = "https://app.recurrente.com/api/users";
        $new_u = $this->curl ($url , json_encode($user) , true);
        return $new_u["id"];
    }

    public function get_checkout ($checkout_data){
        $url = "https://app.recurrente.com/api/checkouts";
        $new_c = $this->curl ($url , $checkout_data , true);
        return $new_c["checkout_url"];
    }


    public function curl ( $url , $data = null){
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,$url);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'X-PUBLIC-KEY:'. $this->public_key,
            'X-SECRET-KEY:'. $this->private_key,
            'Content-Type:application/json'
        ]);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $remote_server_output = curl_exec ($ch);
        curl_close ($ch);
        return json_decode ($remote_server_output , true);
    }



    public function get_the_user_ip() {
        if ( ! empty( $_SERVER['HTTP_CLIENT_IP'] ) ) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif ( ! empty( $_SERVER['HTTP_X_FORWARDED_FOR'] ) ) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } else {
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
}
