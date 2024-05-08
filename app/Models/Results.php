<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Results extends Model
{
    use HasFactory;

    protected $fillable = [
        'answer',
        'test_id',
        'user_id',
        'status',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
