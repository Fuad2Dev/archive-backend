<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    public function papers()
    {
        return $this->hasMany(Paper::class);
    }
}
