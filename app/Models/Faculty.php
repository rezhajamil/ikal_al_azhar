<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Faculty extends Model
{
    use HasFactory;

    protected $table = 'faculties';

    protected $guarded = [];


    public function major()
    {
        return $this->hasMany(Major::class);
    }
}
