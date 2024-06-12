<?php

namespace App\Modules\Layout;




use App\Modules\Layout\Console\Commands\LayoutCommand;
use Illuminate\Support\ServiceProvider;



class LayoutServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->commands([
            LayoutCommand::class,
        ]);

        $this->publishes([
            __DIR__.'/public' => public_path('vendor/layout'),
        ], 'laravel-assets');
    }


}
