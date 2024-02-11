<?php

use Nwidart\Modules\Activators\FileActivator;
use Nwidart\Modules\Providers\ConsoleServiceProvider;

return [

    'namespace' => 'Modules',

    'stubs' => [
        'enabled' => false,
        'path' => base_path('vendor/nwidart/laravel-modules/src/Commands/stubs'),
        'files' => [
            'routes/web' => 'routes/web.php',
            'routes/api' => 'routes/api.php',
            'views/index' => 'resources/views/index.blade.php',
            'views/master' => 'resources/views/layouts/master.blade.php',
            'scaffold/config' => 'config/config.php',
            'composer' => 'composer.json',
            'assets/js/app' => 'resources/assets/js/app.js',
            'assets/sass/app' => 'resources/assets/sass/app.scss',
            'vite' => 'vite.config.js',
            'package' => 'package.json',
        ],
        'replacements' => [
            'routes/web' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'CONTROLLER_NAMESPACE'],
            'routes/api' => ['LOWER_NAME', 'STUDLY_NAME'],
            'vite' => ['LOWER_NAME'],
            'json' => ['LOWER_NAME', 'STUDLY_NAME', 'MODULE_NAMESPACE', 'PROVIDER_NAMESPACE'],
            'views/index' => ['LOWER_NAME'],
            'views/master' => ['LOWER_NAME', 'STUDLY_NAME'],
            'scaffold/config' => ['STUDLY_NAME'],
            'composer' => [
                'LOWER_NAME',
                'STUDLY_NAME',
                'VENDOR',
                'AUTHOR_NAME',
                'AUTHOR_EMAIL',
                'MODULE_NAMESPACE',
                'PROVIDER_NAMESPACE',
            ],
        ],
        'gitkeep' => true,
    ],
    'paths' => [

        'modules' => base_path('Modules'),

        'assets' => public_path('modules'),

        'migration' => base_path('database/migrations'),

        'generator' => [
            'config' => ['path' => 'config', 'generate' => true],
            'command' => ['path' => 'App/Console', 'generate' => false],
            'channels' => ['path' => 'App/Broadcasting', 'generate' => false],
            'migration' => ['path' => 'Database/migrations', 'generate' => false],
            'seeder' => ['path' => 'Database/Seeders', 'generate' => true],
            'factory' => ['path' => 'Database/Factories', 'generate' => false],
            'model' => ['path' => 'App/Models', 'generate' => false],
            'observer' => ['path' => 'App/Observers', 'generate' => false],
            'routes' => ['path' => 'routes', 'generate' => true],
            'controller' => ['path' => 'App/Http/Controllers', 'generate' => true],
            'filter' => ['path' => 'App/Http/Middleware', 'generate' => false],
            'request' => ['path' => 'App/Http/Requests', 'generate' => false],
            'provider' => ['path' => 'App/Providers', 'generate' => true],
            'assets' => ['path' => 'resources/assets', 'generate' => false],
            'lang' => ['path' => 'lang', 'generate' => false],
            'views' => ['path' => 'resources/views', 'generate' => true],
            'test' => ['path' => 'tests/Unit', 'generate' => false],
            'test-feature' => ['path' => 'tests/Feature', 'generate' => false],
            'repository' => ['path' => 'App/Repositories', 'generate' => false],
            'event' => ['path' => 'App/Events', 'generate' => false],
            'listener' => ['path' => 'App/Listeners', 'generate' => false],
            'policies' => ['path' => 'App/Policies', 'generate' => false],
            'rules' => ['path' => 'App/Rules', 'generate' => false],
            'jobs' => ['path' => 'App/Jobs', 'generate' => false],
            'emails' => ['path' => 'App/Emails', 'generate' => false],
            'notifications' => ['path' => 'App/Notifications', 'generate' => false],
            'resource' => ['path' => 'App/resources', 'generate' => false],
            'component-view' => ['path' => 'resources/views/components', 'generate' => false],
            'component-class' => ['path' => 'App/View/Components', 'generate' => false],
        ],
    ],

    'commands' => ConsoleServiceProvider::defaultCommands()
        ->merge([
            // New commands go here
        ])->toArray(),

    'scan' => [
        'enabled' => false,
        'paths' => [
            base_path('vendor/*/*'),
        ],
    ],

    'composer' => [
        'vendor' => 'nwidart',
        'author' => [
            'name' => 'Nicolas Widart',
            'email' => 'n.widart@gmail.com',
        ],
        'composer-output' => false,
    ],

    'cache' => [
        'enabled' => false,
        'driver' => 'file',
        'key' => 'laravel-modules',
        'lifetime' => 60,
    ],

    'register' => [
        'translations' => true,

        'files' => 'register',
    ],

    'activators' => [
        'file' => [
            'class' => FileActivator::class,
            'statuses-file' => base_path('modules_statuses.json'),
            'cache-key' => 'activator.installed',
            'cache-lifetime' => 604800,
        ],
    ],

    'activator' => 'file',
];
