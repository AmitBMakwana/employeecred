<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employees;

class EmployeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees =employees::all();
        return view('employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'organizationId' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $employees = new employees();
        $employees->first_name=$request->first_name;
        $employees->last_name=$request->last_name;
        $employees->organizationId=$request->organizationId;
        $employees->email=$request->email;
        $employees->phone_number=$request->phone_number;
        $employees->save();

        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees =employees::where('id',$id)->first();
        return view('employees.show',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees =employees::where('id',$id)->first();
        return view('employees.edit',compact('employees'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'organizationId' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);

        $employees =employees::where('id',$id)->first();
        $employees->first_name=$request->first_name;
        $employees->last_name=$request->last_name;
        $employees->organizationId=$request->organizationId;
        $employees->email=$request->email;
        $employees->phone_number=$request->phone_number;
        $employees->save();

        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employees =employees::where('id',$id)->first();
        $employees->delete();

        return redirect()->route('employees.index');
    }
}
