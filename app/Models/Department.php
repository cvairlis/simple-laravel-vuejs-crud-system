<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $appends = ['date_created'];

    /**
     * Get the created at in a more readable user-friendly format
     */
    public function getDateCreatedAttribute()
    {
        return Carbon::parse($this->created_at)->format('d-m-Y');
    }
}
