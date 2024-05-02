<?php

namespace LundholmDev\ShadcnUiBlade;

use Illuminate\Support\Facades\Blade;
use LundholmDev\ShadcnUiBlade\Components\Button;
use Illuminate\Support\ServiceProvider;

class ShadcnUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views/' . config('shadcn.style', 'default'), 'shadcn');

        Blade::component('button', Button::class);
    }
}