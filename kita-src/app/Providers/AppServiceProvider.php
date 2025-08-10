<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        /**
         * Only allow signed-in users to update or delete their own records.
         */
        Gate::define('manage-owned', function(User $user, $model){
            return ($model->user_id ?? 'NULL') === $user->id 
                || ($model->seller_id ?? 'NULL') === $user->id;
        });

        /**
         * Only allow admin to delete records.
         */
        Gate::define('admin-only', function(User $user) {
            return $user->hasAnyRole(['admin']);
        });
    }
}
