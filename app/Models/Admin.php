<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;

class Admin extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * @var string
     */
    protected $table = 'admins';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at',
    ];

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param null|string $name
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchName($query, ?string $name)
    {
        if ($name) {
            $query->where('name', 'LIKE', "%$name%");
        }

        return $query;
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param null|string $email
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeSearchEmail(Builder $query, ?string $email)
    {
        if ($email) {
            $query->where('email', 'LIKE', "%$email%");
        }

        return $query;
    }
}
