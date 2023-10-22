<?php

namespace App\Models;

use Illuminate\Contracts\Cache\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        'image',
        'user_id'
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
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
