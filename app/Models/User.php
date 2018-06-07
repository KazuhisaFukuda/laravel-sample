<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Builder;
use App\Notifications\CustomPasswordResetNotification;

class User extends Authenticatable
{
    use Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at', 'updated_at', 'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function toDos()
    {
        return $this->hasMany(Task::class);
    }

    /**
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @param null|string $name
     * @return \Illuminate\Database\Eloquent\Builder $query
     */
    public function scopeSearchName(Builder $query, ?string $name)
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

    /**
     * @param string $token
     * @return void
     */
    public function sendPasswordResetNotification($token)
    {
        $this->notify(new CustomPasswordResetNotification($token));
    }
}
