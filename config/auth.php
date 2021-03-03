<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Authentication Defaults
    |--------------------------------------------------------------------------
    |
    | This option controls the default authentication "guard" and password
    | reset options for your application. You may change these defaults
    | as required, but they're a perfect start for most applications.
    |
    */

    'defaults' => [
        'guard' => 'web',
        'passwords' => 'users',
    ],

    /*
    |--------------------------------------------------------------------------
    | Authentication Guards
    |--------------------------------------------------------------------------
    |
    | Next, you may define every authentication guard for your application.
    | Of course, a great default configuration has been defined for you
    | here which uses session storage and the Eloquent user provider.
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | Supported: "session", "token"
    |
    */

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',
        ],
        'kiosk' => [
            'driver' => 'session',
            'provider' => 'kiosks',
        ],
        'settlement' => [
            'driver' => 'session',
            'provider' => 'settlements',
        ],
        'survey' => [
            'driver' => 'session',
            'provider' => 'surveys',
        ],
        'surveyor' => [
            'driver' => 'session',
            'provider' => 'surveyors',
        ],
        'clerk' => [
            'driver' => 'session',
            'provider' => 'clerks',
        ],
        'user' => [
            'driver' => 'session',
            'provider' => 'users',
        ],

        'api' => [
            'driver' => 'token',
            'provider' => 'users',
            'hash' => false,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Providers
    |--------------------------------------------------------------------------
    |
    | All authentication drivers have a user provider. This defines how the
    | users are actually retrieved out of your database or other storage
    | mechanisms used by this application to persist your user's data.
    |
    | If you have multiple user tables or models you may configure multiple
    | sources which represent each model / table. These sources may then
    | be assigned to any extra authentication guards you have defined.
    |
    | Supported: "database", "eloquent"
    |
    */

    'providers' => [
        'users' => [
            'driver' => 'eloquent',
            'model' => App\Models\User::class,
        ],
        'kiosks' => [
            'driver' => 'eloquent',
            'model' => App\Models\Kiosk::class,
        ],
        'settlements' => [
            'driver' => 'eloquent',
            'model' => App\Models\Settlement::class,
        ],
        'surveys' => [
            'driver' => 'eloquent',
            'model' => App\Models\Survey::class,
        ],
        'surveyors' => [
            'driver' => 'eloquent',
            'model' => App\Models\Surveyor::class,
        ],
        'clerks' => [
            'driver' => 'eloquent',
            'model' => App\Models\Clerk::class,
        ],

        // 'users' => [
        //     'driver' => 'database',
        //     'table' => 'users',
        // ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Resetting Passwords
    |--------------------------------------------------------------------------
    |
    | You may specify multiple password reset configurations if you have more
    | than one user table or model in the application and you want to have
    | separate password reset settings based on the specific user types.
    |
    | The expire time is the number of minutes that the reset token should be
    | considered valid. This security feature keeps tokens short-lived so
    | they have less time to be guessed. You may change this as needed.
    |
    */

    'passwords' => [
        'users' => [
            'provider' => 'users',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'kiosks' => [
            'provider' => 'kiosks',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'settlements' => [
            'provider' => 'settlements',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'surveys' => [
            'provider' => 'surveys',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'surveyors' => [
            'provider' => 'surveyors',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
        'clerks' => [
            'provider' => 'clerks',
            'table' => 'password_resets',
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Password Confirmation Timeout
    |--------------------------------------------------------------------------
    |
    | Here you may define the amount of seconds before a password confirmation
    | times out and the user is prompted to re-enter their password via the
    | confirmation screen. By default, the timeout lasts for three hours.
    |
    */

    'password_timeout' => 10800,

];
