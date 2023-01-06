<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\User::factory(10)->create();
        DB::table('plans')->insert([
            'code' => 'starter-1',
            'name' => 'starter one month',
            'description' => 'starter one month',
            'duration' => '1',
            'regular_price' => '85.98',
            'promo_price' => '55.98',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_wj0lnswa',
        ]);
        DB::table('plans')->insert([
            'code' => 'starter-6',
            'name' => 'starter six months',
            'description' => 'starter six months',
            'duration' => '6',
            'regular_price' => '268.7',
            'promo_price' => '268.7',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_bfnqnknt',
        ]);
        DB::table('plans')->insert([
            'code' => 'starter-12',
            'name' => 'starter 12 months',
            'description' => 'starter 12 months',
            'duration' => '12',
            'regular_price' => '503.82',
            'promo_price' => '503.82',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_57156xzf',
        ]);
        
        DB::table('plans')->insert([
            'code' => 'company-1',
            'name' => 'company one month',
            'description' => 'company one month',
            'duration' => '1',
            'regular_price' => '104.98',
            'promo_price' => '74.98',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_wj0lnswa',
        ]);
        DB::table('plans')->insert([
            'code' => 'company-6',
            'name' => 'company six months',
            'description' => 'company six months',
            'duration' => '6',
            'regular_price' => '359.95',
            'promo_price' => '359.95',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_bfnqnknt',
        ]);
        DB::table('plans')->insert([
            'code' => 'company-12',
            'name' => 'company company months',
            'description' => 'company 12 months',
            'duration' => '12',
            'regular_price' => '674.82',
            'promo_price' => '674.82',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_57156xzf',
        ]);
        DB::table('plans')->insert([
            'code' => 'enterprise-1',
            'name' => 'enterprise one month',
            'description' => 'enterprise one month',
            'duration' => '1',
            'regular_price' => '99.98',
            'promo_price' => '99.98',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_wj0lnswa',
        ]);
        DB::table('plans')->insert([
            'code' => 'enterprise-6',
            'name' => 'enterprise six months',
            'description' => 'enterprise six months',
            'duration' => '6',
            'regular_price' => '479.95',
            'promo_price' => '479.95',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_bfnqnknt',
        ]);
        DB::table('plans')->insert([
            'code' => 'enterprise-12',
            'name' => 'enterprise enterprise months',
            'description' => 'enterprise 12 months',
            'duration' => '12',
            'regular_price' => '899.82',
            'promo_price' => '899.82',
            'paypal_code' => 'none',
            'recurrente_code' => 'prod_57156xzf',
        ]);

        DB::table("features")->insert([
            "plan_code" => "starter",
            "agentes" => "5",
            "bandejas" => "2"
        ]);
        DB::table("features")->insert([
            "plan_code" => "company",
            "agentes" => "10",
            "bandejas" => "5"
        ]);
        DB::table("features")->insert([
            "plan_code" => "enterprise",
            "agentes" => "15",
            "bandejas" => "10"
        ]);
    }
}
