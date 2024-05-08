<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disqus extends Model
{
    use HasFactory;

    protected $table = 'disqus'; // Изменение имени таблицы
    protected $fillable = [
        'forum_id',
        'disqus_id',
        'user_id',
        'body',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Добавьте здесь отношения с другими моделями, если это необходимо
}
