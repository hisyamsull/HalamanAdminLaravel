<?php

namespace App\Http\Controllers;

use App\Models\student;
use Illuminate\Http\Request;

class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $student = student::all();
        return view('index', [
            "title" => "index",
            "students" => $student,
            "no" => 1
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('fromAdd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        student::create($request->all());
        return (redirect('/'));
    }

    /**
     * Display the specified resource.
     */
    public function show(student $student)
    {
        return view('detail', [
            "title" => "detail",
            "student" => $student,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(student $student)
    {
        return view('edit', [
            'title' => 'edit',
            'student' => $student
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $student = student::find($id);
        $student->update($request->all());
        return (redirect('/'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = student::find($id);
        $data->delete();
        return (redirect('/'));
    }
}
