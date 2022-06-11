<?php declare(strict_types=1);

/*
 * This file is part of Cachet.
 *
 * (c) Alt Three Services Limited
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

    'github' => [
        'token' => env('GITHUB_TOKEN'),
    ],

    'mailgun' => [
        'domain' => env('MAIL_USERNAME'),
        'secret' => env('MAIL_PASSWORD'),
    ],

    'mandrill' => [
        'secret' => env('MAIL_PASSWORD'),
    ],

    'nexmo' => [
        'key'      => env('NEXMO_KEY'),
        'secret'   => env('NEXMO_SECRET'),
        'sms_from' => env('NEXMO_SMS_FROM'),
    ],

    'ses' => [
        'key'    => env('MAIL_USERNAME'),
        'secret' => env('MAIL_PASSWORD'),
        'region' => env('SES_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('MAIL_PASSWORD'),
    ],

];
