<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user)
    {
        return true;
    }

    public function create(User $user)
    {
        return true;
    }

    public function update(User $currentUser,User $user)
    {
        // return true;
        return $currentUser->is($user);
    }

    public function delete(User $user)
    {
        return $user->email === 'ashirafzal96@gmail.com';
    }

    public function edit(User $currentUser, User $user)
    {
        return $currentUser->is($user);
    }
}