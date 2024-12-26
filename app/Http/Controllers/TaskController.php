<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_tugas = Task::all();
        return view('admin.scheduleTask', compact('list_tugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tasks_create = Task::all();

        return view('admin.create', compact('tasks_create'));
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
            'deskripsi' => 'required|string',
        ]);

        $data['id_user'] = auth()->id();

        Task::create($data);
        return redirect('/scheduleTask')->with('pesan', 'Tugas Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::where('id', $id)->first();
        return view('admin.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id); // Task harus merupakan model
        return view('admin.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $data = $request->validate([
            'matkul' => 'required|string|max:100',
            'dosen' => 'required|string|max:100',
            'deadline' => 'required|date',
            'deskripsi' => 'required|string',
            'id_user' => 'required|integer',
        ]);

        $task->update($data);
        return redirect('/scheduleTask')->with('update', 'Tugas Berhasil di Perbarui');
    }


    /**
     * Remove the specified resource from storage.
     */
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('/scheduleTask')->with('delete', 'Tugas Berhasil di Hapus!');
    }
}
