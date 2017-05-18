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
        'external_A' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/A',
        ],
        'external_B' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/B',
        ],
        'external_C' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/C',
        ],
        'external_D' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/D',
        ],
        'external_E' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/E',
        ],
        'external_F' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/F',
        ],
        'external_G' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/G',
        ],
        'external_H' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/H',
        ],
        'external_I' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/I',
        ],
        'external_J' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/J',
        ],
        'external_K' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/K',
        ],
        'external_L' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/L',
        ],
        'external_M' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/M',
        ],
        'external_N' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/N',
        ],
        'external_O' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/O',
        ],
        'external_P' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/P',
        ],
        'external_Q' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/Q',
        ],
        'external_R' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/R',
        ],
        'external_S' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/S',
        ],
        'external_T' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/T',
        ],
        'external_U' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/U',
        ],
        'external_V' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/V',
        ],
        'external_W' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/W',
        ],
        'external_X' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/X',
        ],
        'external_Y' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/Y',
        ],
        'external_Z' => [
            'driver' => 'local',
            'root'   => 'H:/xampp/htdocs/music/Z',
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
