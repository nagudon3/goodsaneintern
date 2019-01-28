<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;
use App\Observers\UserObserver;
use App\race;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
        Blade::component('components.alert', 'alert');
        Blade::directive('datetime', function ($expression){
            return "<?php echo ($expression)->format('m/d/Y H:i'); ?>";
        });
        //share name = nazrul as a global
        view()->share('name', 'Nazrul');
        race::observe(studObserver::class);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
