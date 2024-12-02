<?php

namespace App\Providers;

use Livewire\Component;
use Illuminate\Support\ServiceProvider;

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
        Component::macro('openModal', function ($component, $arguments = []) {
            $this->dispatch('openModal', component: $component, arguments: $arguments);
        });
    }
}
