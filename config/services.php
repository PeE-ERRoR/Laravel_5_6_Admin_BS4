<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'facebook' => [
        'client_id' => '462657870825803',
        'client_secret' => '907fc5fc7730ff785f6c3935ff09fba6',
        'redirect' => 'http://localhost:8000/facebook/callback',
    ],

    'google' => [
        'client_id' => '1081140861707-rcvh1sv80osq3131c6jg2dhbjs89cccj.apps.googleusercontent.com',
        'client_secret' => 'Pn6ZlALSDHsLHMSlyfgOii44',
        'redirect' => 'http://localhost:8000/google/callback'
    ],
];
