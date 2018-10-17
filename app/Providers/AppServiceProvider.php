<?php

namespace App\Providers;

use App\Models\Category;
use Backpack\Settings\app\Models\Setting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $categorys = Category::with('products')->orderBy('order')->get();
        $sets = Setting::all();
        $settings = [];
        foreach ($sets as $setting){
            $settings[$setting->key] = $setting->value;
        }
        $share = [
            'categorys' => $categorys,
            'settings' => $settings
        ];
        View::share('share', $share);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // register the services that are only used for development
        if ($this->app->environment() == 'local') {
            $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
            $this->app->register('Backpack\Generators\GeneratorsServiceProvider');
        }
        if ($this->app->environment() !== 'production') {
            $this->app->register(\Barryvdh\LaravelIdeHelper\IdeHelperServiceProvider::class);
        }
    }
}
