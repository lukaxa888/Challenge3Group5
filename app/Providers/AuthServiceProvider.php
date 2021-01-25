<?php

namespace App\Providers;

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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

       /* define an admin user role */
       Gate::define('isAdmin', function($user) {
        return $user->role == 3;
     });
    
     /* define an instructor user role */
     Gate::define('isInstructor', function($user) {
         return $user->role == 2;
     });
   
     /* define a member role */
     Gate::define('isMember', function($user) {
         return $user->role == 1;
     });
    }
}
