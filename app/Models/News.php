<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'author'
    ];

    public function readers()
    {
        return $this->belongsToMany(Reader::class, 'readers_news')
            ->withTimestamps();
    }
}
