<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();

        $defaultPassword = env('SEED_USER_PASSWORD', '123456');
        $adminPassword = env('SEED_ADMIN_PASSWORD', $defaultPassword);
        $managerPassword = env('SEED_MANAGER_PASSWORD', $defaultPassword);
        $clientPassword = env('SEED_CLIENT_PASSWORD', $defaultPassword);
        $driverPassword = env('SEED_DRIVER_PASSWORD', $defaultPassword);
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Michael E. Quinn',
                'email' => 'admin@demo.com',
                'password' => Hash::make($adminPassword),
                'api_token' => Str::random(60),
                'remember_token' => Str::random(60),
                'created_at' => '2018-08-06 22:58:41',
                'updated_at' => '2019-09-27 07:49:45',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Barbara J. Glanz',
                'email' => 'manager@demo.com',
                'password' => Hash::make($managerPassword),
                'api_token' => Str::random(60),
                'remember_token' => Str::random(60),
                'created_at' => '2018-08-14 17:06:28',
                'updated_at' => '2019-09-25 22:09:35',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Charles W. Abeyta',
                'email' => 'client@demo.com',
                'password' => Hash::make($clientPassword),
                'api_token' => Str::random(60),
                'remember_token' => Str::random(60),
                'created_at' => '2019-10-12 22:31:26',
                'updated_at' => '2020-03-29 17:44:30',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Robert E. Brock',
                'email' => 'client1@demo.com',
                'password' => Hash::make($clientPassword),
                'api_token' => Str::random(60),
                'remember_token' => NULL,
                'created_at' => '2019-10-15 17:55:39',
                'updated_at' => '2020-03-29 17:59:39',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Sanchez Roberto',
                'email' => 'driver@demo.com',
                'password' => Hash::make($driverPassword),
                'api_token' => Str::random(60),
                'remember_token' => NULL,
                'created_at' => '2019-12-15 18:49:44',
                'updated_at' => '2020-03-29 17:22:10',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'John Doe',
                'email' => 'driver1@demo.com',
                'password' => Hash::make($driverPassword),
                'api_token' => Str::random(60),
                'remember_token' => NULL,
                'created_at' => '2020-03-29 17:28:04',
                'updated_at' => '2020-03-29 17:28:04',
                'braintree_id' => NULL,
                'paypal_email' => NULL,
                'stripe_id' => NULL,
                'card_brand' => NULL,
                'card_last_four' => NULL,
                'trial_ends_at' => NULL,
                'device_token' => NULL,
            ),
        ));
        
        
    }
}
