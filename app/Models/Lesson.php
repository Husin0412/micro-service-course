<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // use HasFactory;
    protected $table = 'lessons';

    protected $fillable = [
        'name', 'video', 'chapter_id',
    ];
}