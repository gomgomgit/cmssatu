<?php

namespace App\Policies;

use App\Model\Category;
use App\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
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
        return !($user->role == 'author');
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Category  $category
     * @return mixed
     */
    public function create(User $user)
    {
        return !($user->role == 'author');
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Category  $category
     * @return mixed
     */
    public function update(User $user, Category $category)
    {
        return !($user->role == 'author');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Category  $category
     * @return mixed
     */
    public function delete(User $user, Category $category)
    {
        return !($user->role == 'author');
    }
}
