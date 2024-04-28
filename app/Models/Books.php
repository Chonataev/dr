<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'type',
        'file_url',
        'themes_id',
        'status',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
