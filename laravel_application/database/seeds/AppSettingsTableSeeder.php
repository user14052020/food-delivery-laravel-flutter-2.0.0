<?php

use Illuminate\Database\Seeder;

class AppSettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_settings')->delete();

        \DB::table('app_settings')->insert(array (
            0 => 
            array (
                'id' => 7,
                'key' => 'date_format',
            'value' => 'l jS F Y (H:i:s)',
            ),
            1 => 
            array (
                'id' => 8,
                'key' => 'language',
                'value' => 'en',
            ),
            2 => 
            array (
                'id' => 17,
                'key' => 'is_human_date_format',
                'value' => '1',
            ),
            3 => 
            array (
                'id' => 18,
                'key' => 'app_name',
                'value' => 'Food Delivery',
            ),
            4 => 
            array (
                'id' => 19,
                'key' => 'app_short_description',
                'value' => 'Manage Mobile Application',
            ),
            5 => 
            array (
                'id' => 20,
                'key' => 'mail_driver',
                'value' => env('MAIL_DRIVER', 'smtp'),
            ),
            6 => 
            array (
                'id' => 21,
                'key' => 'mail_host',
                'value' => env('MAIL_HOST', ''),
            ),
            7 => 
            array (
                'id' => 22,
                'key' => 'mail_port',
                'value' => env('MAIL_PORT', ''),
            ),
            8 => 
            array (
                'id' => 23,
                'key' => 'mail_username',
                'value' => env('MAIL_USERNAME', ''),
            ),
            9 => 
            array (
                'id' => 24,
                'key' => 'mail_password',
                'value' => env('MAIL_PASSWORD', ''),
            ),
            10 => 
            array (
                'id' => 25,
                'key' => 'mail_encryption',
                'value' => env('MAIL_ENCRYPTION', ''),
            ),
            11 => 
            array (
                'id' => 26,
                'key' => 'mail_from_address',
                'value' => env('MAIL_FROM_ADDRESS', ''),
            ),
            12 => 
            array (
                'id' => 27,
                'key' => 'mail_from_name',
                'value' => env('MAIL_FROM_NAME', ''),
            ),
            13 => 
            array (
                'id' => 30,
                'key' => 'timezone',
                'value' => 'America/Montserrat',
            ),
            14 => 
            array (
                'id' => 32,
                'key' => 'theme_contrast',
                'value' => 'light',
            ),
            15 => 
            array (
                'id' => 33,
                'key' => 'theme_color',
                'value' => 'primary',
            ),
            16 => 
            array (
                'id' => 34,
                'key' => 'app_logo',
                'value' => '020a2dd4-4277-425a-b450-426663f52633',
            ),
            17 => 
            array (
                'id' => 35,
                'key' => 'nav_color',
                'value' => 'navbar-light bg-white',
            ),
            18 => 
            array (
                'id' => 38,
                'key' => 'logo_bg_color',
                'value' => 'bg-white',
            ),
            19 => 
            array (
                'id' => 66,
                'key' => 'default_role',
                'value' => 'admin',
            ),
            20 => 
            array (
                'id' => 68,
                'key' => 'facebook_app_id',
                'value' => env('FACEBOOK_APP_ID', ''),
            ),
            21 => 
            array (
                'id' => 69,
                'key' => 'facebook_app_secret',
                'value' => env('FACEBOOK_APP_SECRET', ''),
            ),
            22 => 
            array (
                'id' => 71,
                'key' => 'twitter_app_id',
                'value' => env('TWITTER_APP_ID', ''),
            ),
            23 => 
            array (
                'id' => 72,
                'key' => 'twitter_app_secret',
                'value' => env('TWITTER_APP_SECRET', ''),
            ),
            24 => 
            array (
                'id' => 74,
                'key' => 'google_app_id',
                'value' => env('GOOGLE_APP_ID', ''),
            ),
            25 => 
            array (
                'id' => 75,
                'key' => 'google_app_secret',
                'value' => env('GOOGLE_APP_SECRET', ''),
            ),
            26 => 
            array (
                'id' => 77,
                'key' => 'enable_google',
                'value' => '1',
            ),
            27 => 
            array (
                'id' => 78,
                'key' => 'enable_facebook',
                'value' => '1',
            ),
            28 => 
            array (
                'id' => 93,
                'key' => 'enable_stripe',
                'value' => '1',
            ),
            29 => 
            array (
                'id' => 94,
                'key' => 'stripe_key',
                'value' => env('STRIPE_KEY', ''),
            ),
            30 => 
            array (
                'id' => 95,
                'key' => 'stripe_secret',
                'value' => env('STRIPE_SECRET', ''),
            ),
            31 => 
            array (
                'id' => 101,
                'key' => 'custom_field_models.0',
                'value' => 'App\\Models\\User',
            ),
            32 => 
            array (
                'id' => 104,
                'key' => 'default_tax',
                'value' => '10',
            ),
            33 => 
            array (
                'id' => 107,
                'key' => 'default_currency',
                'value' => '$',
            ),
            34 => 
            array (
                'id' => 108,
                'key' => 'fixed_header',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 109,
                'key' => 'fixed_footer',
                'value' => '0',
            ),
            36 => 
            array (
                'id' => 110,
                'key' => 'fcm_key',
                'value' => env('FCM_KEY', ''),
            ),
            37 => 
            array (
                'id' => 111,
                'key' => 'enable_notifications',
                'value' => '1',
            ),
            38 => 
            array (
                'id' => 112,
                'key' => 'paypal_username',
                'value' => env('PAYPAL_USERNAME', ''),
            ),
            39 => 
            array (
                'id' => 113,
                'key' => 'paypal_password',
                'value' => env('PAYPAL_PASSWORD', ''),
            ),
            40 => 
            array (
                'id' => 114,
                'key' => 'paypal_secret',
                'value' => env('PAYPAL_SECRET', ''),
            ),
            41 => 
            array (
                'id' => 115,
                'key' => 'enable_paypal',
                'value' => '1',
            ),
            42 => 
            array (
                'id' => 116,
                'key' => 'main_color',
                'value' => '#ea5c44',
            ),
            43 => 
            array (
                'id' => 117,
                'key' => 'main_dark_color',
                'value' => '#ea5c44',
            ),
            44 => 
            array (
                'id' => 118,
                'key' => 'second_color',
                'value' => '#344968',
            ),
            45 => 
            array (
                'id' => 119,
                'key' => 'second_dark_color',
                'value' => '#ccccdd',
            ),
            46 => 
            array (
                'id' => 120,
                'key' => 'accent_color',
                'value' => '#8c98a8',
            ),
            47 => 
            array (
                'id' => 121,
                'key' => 'accent_dark_color',
                'value' => '#9999aa',
            ),
            48 => 
            array (
                'id' => 122,
                'key' => 'scaffold_dark_color',
                'value' => '#2c2c2c',
            ),
            49 => 
            array (
                'id' => 123,
                'key' => 'scaffold_color',
                'value' => '#fafafa',
            ),
            50 => 
            array (
                'id' => 124,
                'key' => 'google_maps_key',
                'value' => env('GOOGLE_MAPS_KEY', ''),
            ),
            51 => 
            array (
                'id' => 125,
                'key' => 'mobile_language',
                'value' => 'en',
            ),
            52 => 
            array (
                'id' => 126,
                'key' => 'app_version',
                'value' => '2.0.0',
            ),
            53 => 
            array (
                'id' => 127,
                'key' => 'enable_version',
                'value' => '1',
            ),
        ));
        
        
    }
}
