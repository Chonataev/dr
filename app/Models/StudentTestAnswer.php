<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentTestAnswer extends Model
{
    use HasFactory;

    protected $fillable = [
        'result_test_id',
        'user_id',
        'question_id',
        'answer_id'
    ];
}
