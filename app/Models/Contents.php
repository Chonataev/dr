<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contents extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'themes_id',
        'body',
        'status',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
