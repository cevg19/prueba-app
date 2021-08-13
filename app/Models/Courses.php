<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'professor_id'];

    public function courses()
    {
        return $this->belongsTo(Courses::class);
    }
}
