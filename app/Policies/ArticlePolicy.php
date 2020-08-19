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
    public function create(User $user)
    {
        return true;
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
        return $article->user_id == $user->id || !($user->role == 'author');
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
        return $article->user_id == $user->id || !($user->role == 'author');
    }
}
