<?php

namespace App\Providers;
use App\User;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Repositories\OrderRepository;
use App\Repositories\OrderRepositoryEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        User::observe(UserObserver::class);
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // sempre que for declarado o OrderRepository, ele vai me trazer o OrderRepositoryEloquent
        $this->app->bind(
            OrderRepository::class, OrderRepositoryEloquent::class
            // quando for querer usar outro ORM, é só trocar pelo OrderRepositoryEloquent,
            // ao invés de trocar em todos os controllers.
        );
    }
}
