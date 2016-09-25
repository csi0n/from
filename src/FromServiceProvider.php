<?php
namespace csi0n\From;

use csi0n\From\Repositories\FromRepository;
use Illuminate\Support\ServiceProvider;

/**
 * Created by csi0n
 * User: huaqing.chen
 * Date: 9/14/16
 * Time: 16:50
 */
class FromServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('FromRepository', function ($app) {
            return new FromRepository($app);
        });
    }
}
