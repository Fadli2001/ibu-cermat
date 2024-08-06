<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Middleware\StepVerification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }

    

    protected function mapWebRoutes()
    {
        Route::middleware('web', StepVerification::class)
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}
