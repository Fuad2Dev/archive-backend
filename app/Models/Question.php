<?php

namespace App\Models;

use App\Models\Scopes\QuestionScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $hidden = ['updated_at'];

    protected static function booted()
    {
        // static::addGlobalScope(new QuestionScope);
    }
}
