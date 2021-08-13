<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hours extends Model
{
    use HasFactory;

    protected $fillable = ['hour'];

    public function professors()
    {
        return $this->belongsTo(Professors::class);
    }
}
