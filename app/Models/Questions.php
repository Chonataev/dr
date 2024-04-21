<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'gender',
        'age',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
