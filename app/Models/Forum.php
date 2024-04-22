<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $table = 'forum'; // Изменение имени таблицы

    protected $fillable = [
        'title',
        'body',
        'user_id',
        'importance',
        'status',
    ];

    // Добавьте здесь отношения с другими моделями, если это необходимо
}
