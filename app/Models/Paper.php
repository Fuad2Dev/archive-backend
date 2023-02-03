<?php

namespace App\Models;

use App\Models\Scopes\PaperScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at', 'course_id'];

    protected function serializeDate(\DateTimeInterface $date)
    {
        return $date->format('Y-m-d');
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
