<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classrooms extends Model
{
    use HasFactory;

    protected $fillable = ['number'];

    public function classrooms()
    {
        return $this->belongsTo(Classrooms::class);
    }
}
