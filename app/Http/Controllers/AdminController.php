<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class AdminController extends Controller
{
    public function index()
    {
        $taskCount = Task::count();
        $selesaiCount = Task::where('status', 'Selesai')->count();
        $belumSelesaiCount = Task::where('status', 'Belum Selesai')->count();
        return view('admin.dashboard', compact('taskCount', 'selesaiCount', 'belumSelesaiCount'));
    }
}
