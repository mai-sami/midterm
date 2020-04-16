<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class AddController extends Controller
{
    public function index()
    {
        $student = Task::all();
        return view('index', compact('student'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',

        ]);
        $student = Task::create($storeData);

        return redirect('/tasks')->with('completed', 'Student has been saved!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $student = Task::findOrFail($id);
        return view('edit', compact('student'));
    }
    public function update(Request $request, $id)
    {
        $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'phone' => 'required|numeric',

        ]);
        Task::whereId($id)->update($updateData);
        return redirect('/tasks')->with('completed', 'Student has been updated');
    }
    public function destroy($id)
    {
        $student = Task::findOrFail($id);
        $student->delete();

        return redirect('/tasks')->with('completed', 'Student has been deleted');
    }

}
