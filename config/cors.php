<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Cross-Origin Resource Sharing (CORS) Configuration
    |--------------------------------------------------------------------------
    |
    | Here you may configure your settings for cross-origin resource sharing
    | or "CORS". This determines what cross-origin operations may execute
    | in web browsers. You are free to adjust these settings as needed.
    |
    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS
    |
    */

<<<<<<< HEAD
    'paths' => ['api/*', 'sanctum/csrf-cookie', '/login', '/logout'],
=======
    'paths' => ['api/*', 'sanctum/csrf-cookie'],
>>>>>>> 5b36b3633ff69fd433f634b0929acdef5e0fdcb5

    'allowed_methods' => ['*'],

    'allowed_origins' => ['*'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

<<<<<<< HEAD
    'supports_credentials' => true,
=======
    'supports_credentials' => false,
>>>>>>> 5b36b3633ff69fd433f634b0929acdef5e0fdcb5

];
