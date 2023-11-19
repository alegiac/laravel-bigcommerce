<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Bigcommerce Api
    |--------------------------------------------------------------------------
    |
    | This file is for setting the credentials for bigcommerce api key and secret.
    |
    */
    'default' => env("BIGCOMMERCE_CONNECTION", 'oAuth'),


    'basicAuth' => [
        'store_url' => env("BIGCOMMERCE_STORE_URL"),
        'username'  => env("BIGCOMMERCE_USERNAME"),
        'api_key'   => env("BIGCOMMERCE_API_KEY"),
    ],

    'oAuth' => [
        'client_id'     => env("BIGCOMMERCE_CLIENT_ID"),
        'client_secret' => env("BIGCOMMERCE_CLIENT_SECRET"),
        'redirect_url'  => env("BIGCOMMERCE_REDIRECT_URL"),
    ],

];