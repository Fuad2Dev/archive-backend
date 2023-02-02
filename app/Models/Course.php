<?php

namespace App\Models;

use App\Models\Scopes\CourseScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    public function papers()
    {
        return $this->hasMany(Paper::class);
    }

    // public function scopeFilter($query)
    // {
    //     return $query->select(['id', 'title', 'img', 'created_at']);
    // }
}
