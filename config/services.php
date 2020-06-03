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


    'facebook' => [
        'client_id' => '267278737800926',
        'client_secret' => '298d736ebab3bbd56b3c3a5eff1f97da',
        'redirect' => 'https://grocery.srtusher.com/callback/facebook',
    ],


    'google' => [
        'client_id' => '354429065172-6t459n5leu94patg9ued1deogo07v896.apps.googleusercontent.com',
        'client_secret' => 'rqiv8K5nrUoQ3oIjXhdYgWkv',
        'redirect' => 'https://grocery.srtusher.com/callback/google',
    ],

];
