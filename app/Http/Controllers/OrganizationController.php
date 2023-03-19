<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\organization;

class OrganizationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $organizations = organization::all();
        return view('organization.index',compact('organizations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organization.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        
        $organization = new organization();
        $organization->name=$request->name;
        $organization->email=$request->email;
        $organization->phone_number=$request->phone_number;
        $organization->save();
        
        return redirect()->route('organizations.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $organizations = organization::where("id",$id)->first();
        return view('organization.show',compact('organizations'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $organizations = organization::where("id",$id)->first();
        return view('organization.edit',compact('organizations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
        ]);
        
        $organization = organization::where("id",$id)->first();
        $organization->name=$request->name;
        $organization->email=$request->email;
        $organization->phone_number=$request->phone_number;
        $organization->save();
        
        return redirect()->route('organizations.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $organization = organization::where("id",$id)->first();
        $organization->delete();

        return redirect()->route('organizations.index');
    }
}
