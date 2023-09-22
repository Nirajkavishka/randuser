<?php

namespace Nirajkavishka\Randuser;

use Illuminate\Support\ServiceProvider;

class RandUserServiceProvider extends ServiceProvider
{
  public function boot()
  {
    $this->loadRoutesFrom(__DIR__ . '/routes.php');
    $this->loadViewsFrom(__DIR__ . '/views', 'randuser');
    $this->loadMigrationsFrom(__DIR__ . '/migrations');
  }

  public function register()
  {

  }
}