<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'tasks';

    protected $fillable = ["matkul", "dosen", "deadline", "deskripsi", "id_user", "status"];
}
