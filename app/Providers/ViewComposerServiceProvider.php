<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Theme;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.app', function ($view) {
            $themes = Theme::whereNull('theme_id')->get();

            foreach ($themes as $theme) {
                $theme['themes'] = Theme::where('theme_id', $theme->id)->get();
            }

            $view->with('themes', $themes);
        });
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
