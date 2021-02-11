<?php

namespace App\Http\Controllers;

use App\Models\Testtodos;
use Illuminate\Http\Request;

class TesttodosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Testtodos::all();

        return view('Pages.index', compact('projects'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Pages.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $testtodos = new Testtodos();
        $testtodos->firstname = $request->first_name;
        $testtodos->lastname = $request->last_name;
        $testtodos->phone = $request->phone_number;
        $testtodos->email = $request->email;
        $testtodos->address = $request->address;
        $testtodos->gender = $request->gender;
        $testtodos->save();
        return redirect()->route('testTodos.index')
        ->with('success', 'Project created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testtodos  $testtodos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $testDetails = Testtodos::find($id);
        return view('Pages.show',compact('testDetails'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testtodos  $testtodos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $editTest = Testtodos::find($id);
        return view('Pages.edit',compact('editTest'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testtodos  $testtodos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $testtodos = Testtodos::find($id);
        $testtodos->firstname = $request->first_name;
        $testtodos->lastname = $request->last_name;
        $testtodos->phone = $request->phone_number;
        $testtodos->email = $request->email;
        $testtodos->address = $request->address;
        $testtodos->gender = $request->gender;
        $testtodos->save();
        return redirect()->route('testTodos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testtodos  $testtodos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $deleteTest = Testtodos::find($id);
       $deleteTest->delete();
       return back();
    }
}
