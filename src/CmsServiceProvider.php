<?php namespace Dezashibi\Cms;

use Illuminate\Support\ServiceProvider;

class CmsServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('cms', function() {
            return new Cms;
        });

        $this->mergeConfigFrom(__DIR__."/config/cmsconf.php" , "cms");
    }

    public function boot()
    {
        require __DIR__ . "/routes/web.php";

        $this->loadViewsFrom(__DIR__."/Views","cms");

        //$this->app['router']->middleware('adminMiddleware' , \Dezashibi\Cms\Http\Middleware\Admin::class);
        // $this->app['router']->middleware('adminMiddleware', 'Dezashibi\Cms\Http\Middleware\Admin');
        app('router')->aliasMiddleware('adminMiddleware', \Dezashibi\Cms\Http\Middleware\Admin::class);



        $this->publishes([
            __DIR__."/config/cmsconf.php" => config_path('cms.php'), //the name cms should be like the name of the config in the register section
        ],"config");

        $this->publishes([
            __DIR__."/Views" => base_path('/resources/views/vendor/cms') //the name cms should be like the name of the config in the register section in the vendor folder in resources/views
        ],"views");

        $this->publishes([
            __DIR__."/Migrations" => base_path('/database/migrations') //the name cms should be like the name of the config in the register section in the vendor folder in resources/views
        ],"migrations");
    }
}