<?php

namespace App\Models;

use App\Models\Scopes\QuestionScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $hidden = ['id', 'updated_at', 'paper_id'];
}
