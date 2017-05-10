<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => 'local',

    /*
    |--------------------------------------------------------------------------
    | Default Cloud Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Many applications store files both locally and in the cloud. For this
    | reason, you may specify a default "cloud" driver here. This driver
    | will be bound as the Cloud disk implementation in the container.
    |
    */

    'cloud' => 's3',

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been setup for each driver as an example of the required options.
    |
    | Supported Drivers: "local", "ftp", "s3", "rackspace"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
        ],
        'custom' => [
            'driver' => 'local',
            'root'   => 'G:/matriz',
        ],

        'letter_ALL' => [
            'driver' => 'local',
            'root' => public_path('music'),
            'visibility' => 'public',
        ],
        'letter_A' => [
            'driver' => 'local',
            'root' => public_path('music/A'),
            'visibility' => 'public',
        ],
        'letter_B' => [
            'driver' => 'local',
            'root' => public_path('music/B'),
            'visibility' => 'public',
        ],
        'letter_C' => [
            'driver' => 'local',
            'root' => public_path('music/C'),
            'visibility' => 'public',
        ],
        'letter_D' => [
            'driver' => 'local',
            'root' => public_path('music/D'),
            'visibility' => 'public',
        ],
        'letter_E' => [
            'driver' => 'local',
            'root' => public_path('music/E'),
            'visibility' => 'public',
        ],
        'letter_F' => [
            'driver' => 'local',
            'root' => public_path('music/F'),
            'visibility' => 'public',
        ],
        'letter_G' => [
            'driver' => 'local',
            'root' => public_path('music/G'),
            'visibility' => 'public',
        ],
        'letter_H' => [
            'driver' => 'local',
            'root' => public_path('music/H'),
            'visibility' => 'public',
        ],
        'letter_I' => [
            'driver' => 'local',
            'root' => public_path('music/I'),
            'visibility' => 'public',
        ],
        'letter_J' => [
            'driver' => 'local',
            'root' => public_path('music/J'),
            'visibility' => 'public',
        ],
        'letter_K' => [
            'driver' => 'local',
            'root' => public_path('music/K'),
            'visibility' => 'public',
        ],
        'letter_L' => [
            'driver' => 'local',
            'root' => public_path('music/L'),
            'visibility' => 'public',
        ],
        'letter_M' => [
            'driver' => 'local',
            'root' => public_path('music/M'),
            'visibility' => 'public',
        ],
        'letter_N' => [
            'driver' => 'local',
            'root' => public_path('music/N'),
            'visibility' => 'public',
        ],
        'letter_O' => [
            'driver' => 'local',
            'root' => public_path('music/O'),
            'visibility' => 'public',
        ],
        'letter_P' => [
            'driver' => 'local',
            'root' => public_path('music/P'),
            'visibility' => 'public',
        ],
        'letter_Q' => [
            'driver' => 'local',
            'root' => public_path('music/Q'),
            'visibility' => 'public',
        ],
        'letter_R' => [
            'driver' => 'local',
            'root' => public_path('music/R'),
            'visibility' => 'public',
        ],
        'letter_S' => [
            'driver' => 'local',
            'root' => public_path('music/S'),
            'visibility' => 'public',
        ],
        'letter_T' => [
            'driver' => 'local',
            'root' => public_path('music/T'),
            'visibility' => 'public',
        ],
        'letter_U' => [
            'driver' => 'local',
            'root' => public_path('music/U'),
            'visibility' => 'public',
        ],
        'letter_V' => [
            'driver' => 'local',
            'root' => public_path('music/V'),
            'visibility' => 'public',
        ],
        'letter_W' => [
            'driver' => 'local',
            'root' => public_path('music/W'),
            'visibility' => 'public',
        ],
        'letter_X' => [
            'driver' => 'local',
            'root' => public_path('music/X'),
            'visibility' => 'public',
        ],
        'letter_Y' => [
            'driver' => 'local',
            'root' => public_path('music/Y'),
            'visibility' => 'public',
        ],
        'letter_Z' => [
            'driver' => 'local',
            'root' => public_path('music/Z'),
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => 'your-key',
            'secret' => 'your-secret',
            'region' => 'your-region',
            'bucket' => 'your-bucket',
        ],

    ],

];
