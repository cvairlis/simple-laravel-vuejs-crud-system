<?php

namespace App\Http\Controllers;

use App\Models\Department;

class GetDepartmentsController extends Controller
{
    /**
     * Gets a collection of departments.
     * Used for pagination purposes.
     *
     * TODO: replace the direct access to the model with a repository.
     */
    public function index()
    {
        return Department::paginate(request('paginate', 10));
    }

    /**
     * Gets a collection of departments.
     * For the given query.
     *
     * TODO: replace the direct access to the model with a repository.
     */
    public function search(string $query)
    {
        return Department::where('name', 'like', '%'. $query. '%')->get()->map(function ($department) {
            return collect($department->toArray())->only(['name', 'code'])->toArray();
        })->toArray();
    }
}
