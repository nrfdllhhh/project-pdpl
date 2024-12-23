<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::all();

        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tasks = Task::all();

        return view('tasks.create', compact('tasks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'matkul' => 'required|string|max:100',
            'dosen' => 'required|string|max:100',
            'deadline' => 'required|date',
            'deskripsi' => 'required|text',
            'id_user' => 'required|integer',
        ]);

        Task::create($data);

        return redirect()->route('tasks.index');

        return view('tasks.create', compact('tasks'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        $tasks = Task::all();

        return view('tasks.edit', compact('tasks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        /**
         * Update the specified resource in storage.
         */
        // Validasi data input
        $data = $request->validate([
            'matkul' => 'required|string|max:100',
            'dosen' => 'required|string|max:100',
            'deadline' => 'required|date',
            'deskripsi' => 'required|string',
            'id_user' => 'required|integer',
        ]);

        // Update data pada model
        $task->update($data);

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('tasks.index')->with('success', 'Task updated successfully!');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        // Hapus data
        $task->delete();

        // Redirect ke halaman index dengan pesan sukses
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully!');
    }
}
