<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Gets the users show page.
     */
    public function index(Request $request)
    {
        return view('pages.users.show');
    }
}
