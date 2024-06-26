<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo_table';

    protected $fillable = [
        'todo',
        'description',
        'priority',
        'completed',
    ];
}
