<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Department extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
    ];

    protected $appends = ['date_created', 'code'];

    /**
     * Get the created at in a more readable user-friendly format
     */
    public function getDateCreatedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }

    /**
     * Get the code attribute
     */
    public function getCodeAttribute()
    {
        return $this->id;
    }

    /**
     * Many to many relation with users departments
     */
    public function users() : BelongsToMany
    {
        return $this->belongsToMany(User::class);
    }
}
