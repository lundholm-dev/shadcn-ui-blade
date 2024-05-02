<?php

namespace LundholmDev\ShadcnUiBlade;

use Illuminate\Support\Facades\Blade;
use LundholmDev\ShadcnUiBlade\Components\Button;
use Illuminate\Support\ServiceProvider;

class ShadcnUiServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'shadcn');

        Blade::component('button', Button::class);
    }
}