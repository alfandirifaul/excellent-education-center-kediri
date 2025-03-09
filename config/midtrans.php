<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Midtrans Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may specify your Midtrans configuration settings. These settings
    | are used when interacting with the Midtrans API. You can obtain these
    | keys from your Midtrans account dashboard.
    |
    */

    'server_key' => env('MIDTRANS_SERVER_KEY', 'Mid-client-DjhOzi8O9xrozj8J'),
    'client_key' => env('MIDTRANS_CLIENT_KEY', 'Mid-server-0tqkT73A3PU-8t6uJb6LHGoA'),
    'is_production' => env('MIDTRANS_IS_PRODUCTION', false),
    'is_sanitized' => env('MIDTRANS_IS_SANITIZED', true),
    'is_3ds' => env('MIDTRANS_IS_3DS', true),
];

