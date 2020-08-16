<?php

namespace App\Policies;

use App\Model\Article;
use App\Model\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ArticlePolicy
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
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Article  $article
     * @return mixed
     */
    public function view(User $user, Article $article)
    {
        // $is_belongs == $article->where('user_id', '=', $user->id);
        // return !($user->id == $is_belongs);
        return !$user->role == 'author';
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Model\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Article  $article
     * @return mixed
     */
    public function update(User $user, Article $article)
    {
        return ($article->user_id == $user->id);
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Article  $article
     * @return mixed
     */
    public function delete(User $user, Article $article)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Article  $article
     * @return mixed
     */
    public function restore(User $user, Article $article)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Model\User  $user
     * @param  \App\Model\Article  $article
     * @return mixed
     */
    public function forceDelete(User $user, Article $article)
    {
        //
    }
}
