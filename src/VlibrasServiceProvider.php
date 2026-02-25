<?php

namespace DynamikaSolucoesWeb\Vlibras;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use DynamikaSolucoesWeb\Vlibras\View\Components\Vlibras;

class VlibrasServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'vlibras');

        Blade::component('vlibras', Vlibras::class);
    }
}