<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class BlogContent extends Model
{
    use HasFactory;
    use Searchable;

    protected $table = 'blog_content';

    protected $fillable = [
        'language_id',
        'blog_id',
        'name',
        'content',
        'meta_keys',
        'meta_description',
        'image',
    ];
    public function blog(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Blog::class);
    }

}
