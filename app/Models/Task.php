<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Task extends Model
{
    protected $table ='tasks';

    protected $guarded = [];

    protected $dates = [
        'created_at', 'updated_at',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param null|string $userName
     * @return \Illuminate\Database\Eloquent\Builder $query
     */
    public function scopeSearchUser(Builder $query, ?string $userName)
    {
        if ($userName) {
            $query->whereHas('user', function ($query) use ($userName) {
                $query->where('name', 'LIKE', "%$userName%");
            });
        }

        return $query;
    }
}
