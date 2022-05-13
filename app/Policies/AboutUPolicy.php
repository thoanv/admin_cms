<?php

namespace App\Policies;

use App\Models\AboutU;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutUPolicy
{
    use HandlesAuthorization;
    public function before($user, $ability)
    {
        if ($user->isSuperAdmin()) {
            return true;
        }
    }
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('aboutUs-views');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutU  $aboutU
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, AboutU $aboutU)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutU  $aboutU
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, AboutU $aboutU)
    {
        return $user->hasPermission('aboutUs-edit');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutU  $aboutU
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, AboutU $aboutU)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutU  $aboutU
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, AboutU $aboutU)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\AboutU  $aboutU
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, AboutU $aboutU)
    {
        //
    }
}
