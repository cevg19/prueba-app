<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calendar extends Model
{
    use HasFactory;

    protected $fillable = ['classroom_id', 'course_id', 'times'];

    public function classrooms()
    {
        return $this->belongsTo(Classrooms::class);
    }
}
