<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    const SUCCESSFULLY_ADDED = 'Successfully added';

    /**
     * Gets the departments show page.
     */
    public function index(Request $request)
    {
        return view('pages.departments.show');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new Department([
            'name' => request('name'),
            'description' => request('description'),
        ]);

        $department->save();

        return response()->json(self::SUCCESSFULLY_ADDED);
    }

    /**
     * Gets data from the resource
     */
    public function edit($id)
    {
      $department = Department::find($id);

      return response()->json($department);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $department = Department::find($id);
        return response()->json($department);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $department = Department::find($id);

        $department->update($request->all());

        return response()->json(self::SUCCESSFULLY_ADDED);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = Department::find($id);

        $department->delete();

        return response()->json(self::SUCCESSFULLY_ADDED);
    }
}
