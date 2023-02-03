<?php

namespace App\Models;

use App\Models\Scopes\PaperScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paper extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at', 'course_id'];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
