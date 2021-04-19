<?php

namespace App\Http\Controllers;

use App\Models\User;

class GetUsersController
{
    /**
     * Gets a collection of users.
     * Used for pagination purposes.
     *
     * TODO: replace the direct access to the model with a repository.
     */
    public function index()
    {
        return User::paginate(request('paginate', 10));
    }
}
