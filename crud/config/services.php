<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'firebase' => [
    'api_key' => "AIzaSyA21eJdL1dQPv1i96rItdKzqgNeMJWyJPo",
    'auth_domain' => "crud1-45ebb.firebaseapp.com",
    'database_url' => 'crud-e422c-default-rtdb.firebaseio.com',
    'project_id' =>  "crud-e422c",
    'storage_bucket' =>"crud1-45ebb.appspot.com",
    'messaging_sender_id' => "556161146612",
    'app_id' => "1:556161146612:web:6d9fef5380680d57c848a1",
    'measurement_id' =>"G-NYS1NB2MK3"
],

];
