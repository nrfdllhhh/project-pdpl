<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list_tugas = Task::all();
        return view('jadwal.schedule', compact('list_tugas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $task = Task::where('id', $id)->first();
        return view('jadwal.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $task = Task::findOrFail($id); // Task harus merupakan model
        return view('jadwal.edit', compact('task'));
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
            'status' => 'required|string',
        ]);

        $task->update($data);
        return redirect('/schedule')->with('update', 'Kelola Tugas Berhasil di Perbarui');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $id)
    {
        // Hapus data
        $id->delete();
        // Redirect ke halaman index dengan pesan sukses
        return redirect('/schedule')->with('delete', 'Kelola Tugas Berhasil di Hapus!');
    }
}
