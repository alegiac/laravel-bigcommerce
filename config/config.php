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
        'store_url' => env("BIGCOMMERCE_STORE_URL", null),
        'username'  => env("BIGCOMMERCE_USERNAME", null),
        'api_key'   => env("BIGCOMMERCE_API_KEY", null)
    ],

    'oAuth' => [
        'client_id'     => env("BIGCOMMERCE_CLIENT_ID", null),
        'client_secret' => env("BIGCOMMERCE_CLIENT_SECRET", null),
        'redirect_url'  => env("BIGCOMMERCE_REDIRECT_URL", null)
    ],

];