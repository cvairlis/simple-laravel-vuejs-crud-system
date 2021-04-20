<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'departments',
    ];

    protected $appends = ['date_created'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * Get the created at in a more readable user-friendly format
     */
    public function getDateCreatedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }

    /**
     * Many to many relation with users departments
     */
    public function departments() : BelongsToMany
    {
        return $this->belongsToMany(Department::class);
    }
}
