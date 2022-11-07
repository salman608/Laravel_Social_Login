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
        'scheme' => 'https',
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
        'client_id' => '1224907931573868',
        'client_secret' => 'e0307b243a5b77d436df7e6f7bf98f54',
        'redirect' => 'http://localhost:8000/login/facebook/callback',
    ],

    'github' => [
        'client_id' => 'f5a6b2dd38568a1f2724',
        'client_secret' => '9a770b9a7145bae5f95e7257f95750f7b4ee8015',
        'redirect' => 'http://localhost:8000/login/github/callback',
    ],

    'google' => [
        'client_id' => '590290383941-4fo8aoc3get4rdgd44inj0p1gip8vsru.apps.googleusercontent.com',
        'client_secret' => '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',
        'redirect' => 'http://localhost:8000/login/google/callback',
    ],



];
