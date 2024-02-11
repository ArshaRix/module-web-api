<?php

namespace Modules\User\App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use File;
use View;

class RouteServiceProvider extends ServiceProvider
{
    protected string $moduleNamespace = 'Modules\User\App\Http\Controllers';

    public function boot(): void
    {
        parent::boot();

        // foreach (File::directories(app_path('Modules')) as $moduleDir) {
        //     View::addLocation($moduleDir);
        // }
    }

    public function map(): void
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
    }

    protected function mapWebRoutes(): void
    {
        Route::middleware('web')
            ->namespace($this->moduleNamespace)
            ->group(module_path('User', '/routes/web.php'));
    }

    protected function mapApiRoutes(): void
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->moduleNamespace)
            ->group(module_path('User', '/routes/api.php'));
    }
}
