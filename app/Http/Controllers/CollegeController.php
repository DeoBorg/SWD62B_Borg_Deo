<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    // List all colleges
    public function index()
    {
        $colleges = College::all();
        return view('colleges.index', compact('colleges'));
    }
    // Form to add a new college
    public function createCollege()
    {
        return view('colleges.create');
    }
    // Store to add a new college
    public function storeCollege(Request $request) {
        $request->validate([
            'name' => 'required'|'unique:colleges.name',
            'address' => 'required',
        ]);

        College::create([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        //Redirect to colleges.index page with success message
        return redirect()->route('colleges.index')->with('success', 'College added successfully');
    }
    // Form to update a college's details
    public function edit($id)
    {
        $college = College::findOrFail($id);
        return view('colleges.edit', compact('college'));
    }
    public function updateCollege(Request $request, $id){
        $request->validate([
            'name' => 'required'|'unique:colleges.name',
            'address' => 'required',
        ]);

        $college = College::findOrFail($id);

        $college->update([
            'name' => $request->name,
            'address' => $request->address,
        ]);

        //Redirect to colleges.index page with success message
        return redirect()->route('colleges.index')->with('success', 'College updated successfully');
    }
    // Delete a college
    public function deleteCollege($id){
        $college = College::findOrFail($id);
        $college->delete();

        //Redirect to colåleges.index page with success message
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully');
    }
}
