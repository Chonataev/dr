<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    use HasFactory;

    protected $fillable = [
        'question_id',
        'content',
        'right',
    ];

    // Отношение "многие к одному" с моделью Question
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
