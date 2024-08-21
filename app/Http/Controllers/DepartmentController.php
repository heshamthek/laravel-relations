<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $departments=Department::all();
        return view('departments.index',compact('departments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('departments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' =>'required|unique:departments|max:255',
        ]);

        Department::create($request->all());
        return redirect()->route('departments.index')->with('success','Department created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       return view('departments.show',compact('departments'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(department $department)
    {
      return view('departments.edit',compact('department'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, department $department)
    {
        $request->validate([
            'name'=> 'required|unique:departments,name,'. $department->id.'|max:255',
             
        ]);
        $department->update($request->all());
        return redirect()->route('departments.index')->with('success','updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(department $department)
    {
       $department->delete();
       return redirect()->route('departments.index')->with('success','Department deleted');
    }
}
