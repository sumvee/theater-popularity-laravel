<?php
// config/debugbar.php

return [
    // Other configurations...

    'storage' => [
        'enabled' => true,
        'driver' => 'file', // or any other driver you are using
        'path' => storage_path('debugbar'), // or your custom path
        'connection' => null, // for database driver
        'provider' => '', // for PDO driver
        'open' => true, // Set this to true
    ],

    // Other configurations...
];
