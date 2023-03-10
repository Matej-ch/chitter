<?php

namespace App\Policies;

use App\Models\Chitter;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class ChitterPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Chitter $chitter)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     */
    public function update(User $user, Chitter $chitter): Response|bool
    {
        return $chitter->user()->is($user);
    }

    /**
     * Determine whether the user can delete the model.
     *
     */
    public function delete(User $user, Chitter $chitter): Response|bool
    {
        return $this->update($user, $chitter);
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Chitter $chitter)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param \App\Models\User $user
     * @param \App\Models\Chitter $chitter
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Chitter $chitter)
    {
        //
    }
}
