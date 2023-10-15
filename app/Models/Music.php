<?php

namespace App\Models;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Music extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'artist',
        'movie_name',
        'description',
        'download_link',
        'iframe_link',
        'image'
    ];
    protected static function boot()
    {
        parent::boot();
        static::deleting(function ($music) {
            Storage::delete('public/' . $music->image);
        });
        static::saving(function ($music) {
            if ($music->isDirty('image')) {
                Storage::delete('public/' . $music->getOriginal('image'));
            }
        });
    }
}
