<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Gets the departments show page.
     */
    public function index(Request $request)
    {
        return view('pages.departments.show');
    }
}
