<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Page extends Model
{
    use HasFactory;

    protected $table = 'page';

    protected $fillable = [
        'status'
    ];

    protected $with = [
        'content',
    ];

    /**
     * @return HasMany
     */
    public function content(): HasMany
    {
        return $this->hasMany(PageContent::class);
    }

//    /**
//     * @return HasMany
//     */
//    public function comments(): HasMany
//    {
//        return $this->hasMany(Comment::class);
//    }
}
