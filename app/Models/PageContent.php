<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageContent extends Model
{
    use HasFactory;

    protected $table = 'page_content';

    protected $fillable = [
        'language_id',
        'page_id',
        'key',
        'name',
        'meta_title',
        'meta_description',
        'meta_keys',
    ];
    public function page(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

}
