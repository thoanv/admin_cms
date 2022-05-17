<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Employee;
use App\Models\Menu;
use App\Models\News;
use App\Policies\CategoryPolicy;
use App\Policies\EmployeePolicy;
use App\Policies\MenuPolicy;
use App\Policies\NewsPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
        News::class => NewsPolicy::class,
        Menu::class => MenuPolicy::class,
        Category::class => CategoryPolicy::class,
        Employee::class => EmployeePolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
