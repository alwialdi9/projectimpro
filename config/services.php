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

    'google' => [
        'client_id' => '504712918393-v62bn2ls6pddp7p1anjiurog63lbtpnd.apps.googleusercontent.com',
        'client_secret' => 'ZHix7DVz0S3MeipsiT71S1nH',
        'redirect' => 'http://127.0.0.1:8000/google/callback'
    ],

    'facebook' => [
        'client_id' => '723259651500318',
        'client_secret' => '883a8c5c8846e4d791d6f6a83691dbd3',
        'redirect' => 'http://localhost:8000/facebook/callback'
    ],

];
