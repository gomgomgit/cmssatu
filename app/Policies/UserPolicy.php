<?php

namespace App\Policies;

use App\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Model\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $user->role == 'admin';
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function view(User $user, User $model)
    {
        return $user->id == $model->id || $user->role == 'admin';
    }
    public function update(User $user, User $model)
    {
        return $user->id == $model->id || $user->role == 'admin';
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\User  $model
     * @return mixed
     */
    public function delete(User $user, User $model)
    {
        return $user->id == $model->id || $user->role == 'admin';
    }
}
