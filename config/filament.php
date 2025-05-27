<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Panel
    |--------------------------------------------------------------------------
    */
    'default' => 'admin',

    /*
    |--------------------------------------------------------------------------
    | Panel Definitions
    |--------------------------------------------------------------------------
    */
    'panels' => [
        'admin' => [
            'path' => 'admin', // URL path untuk panel
            'resources' => [
                'path' => app_path('Filament/Resources'),
                'namespace' => 'App\\Filament\\Resources',
            ],
            'pages' => [
                'path' => app_path('Filament/Pages'),
                'namespace' => 'App\\Filament\\Pages',
            ],
            'widgets' => [
                'path' => app_path('Filament/Widgets'),
                'namespace' => 'App\\Filament\\Widgets',
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Broadcasting (Opsi)
    |--------------------------------------------------------------------------
    */
    'broadcasting' => [
        // 'echo' => [...]
    ],

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    */
    'default_filesystem_disk' => env('FILAMENT_FILESYSTEM_DISK', 'public'),

    /*
    |--------------------------------------------------------------------------
    | Livewire Loading Delay
    |--------------------------------------------------------------------------
    */
    'livewire_loading_delay' => 'default',
];