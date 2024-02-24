<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Role
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $key
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @mixin \Eloquent
 */
class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = [
        'name',
        'key'
    ];

    protected $with = [
        'users',
    ];
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
