<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];

    // public static function boot()
    // {
    //     parent::boot();

    //     self::creating(function ($post) {
    //         $post->user()->associate(auth()->user()->id);

    //     });
    // }
};


// public function user(): BelongsTo
// {
//     return $this->belongsTo(User::class);
// };
