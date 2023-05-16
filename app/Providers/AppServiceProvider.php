<?php

namespace App\Providers;

use App\Models\Department;
use App\Repositories\DepartmentRepositoryEloquent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\DepartmentRepositoryInterface','App\Repositories\DepartmentRepositoryEloquent');

        $this->app->bind('App\Repositories\DepartmentRepositoryInterface',function(){
            return new DepartmentRepositoryEloquent(new Department());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
