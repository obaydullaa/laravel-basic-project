<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';
// We decide where column send data otherwise don't send data
    // protected $fillable = ['name', 'age', 'status', 'trash'];

// We send data every column
    // protected $guarded = [];

// If we need any column data don't send just name in empty array
    protected $guarded = ['email', 'cell'];
}
