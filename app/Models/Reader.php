<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name'
    ];

    public function news()
    {
        return $this->belongsToMany(News::class, 'readers_news')
            ->withTimestamps();

    }
}
