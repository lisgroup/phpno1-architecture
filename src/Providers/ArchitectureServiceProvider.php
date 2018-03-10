<?php

namespace Phpno1\Architecture\Providers;

use Illuminate\Support\ServiceProvider;

class ArchitectureServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/architecture.php' => config_path('architecture.php')
        ],'Architecture');

        
        $this->mergeConfigFrom(__DIR__ . '/../config/architecture.php', 'architecture');

        $this->loadTranslationsFrom(__DIR__ . '/../lang', 'architecture');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateEntity');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateController');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateCriteria');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateFilter');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateModel');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateRepository');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateRequest');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateResponse');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateSeeder');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateService');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateProvider');
        $this->commands('Phpno1\Architecture\Generator\Commands\CreateBinding');
        //end-binding
    }
}
