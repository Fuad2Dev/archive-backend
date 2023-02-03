<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    protected static function booted()
    {
        static::creating(function ($course) {
            $course->slug = Str::slug($course->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }


    public function papers()
    {
        return $this->hasMany(Paper::class);
    }
}
