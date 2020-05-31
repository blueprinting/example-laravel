<?php

namespace App\Providers;

use Blueprinting\Blueprint;
use Blueprinting\Template;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->app->bind(Blueprint::class, static function ($app) {
            return (new Blueprint())->setTemplate(
                new Template(
                    'default',
                    [
                        'param1' => 'value1',
                        'param2' => 'value2',
                    ]
                )
            );
        });
    }
}
