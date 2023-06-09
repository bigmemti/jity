<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'time_id',
        'week_day_id'
    ];

    public function time()
    {
        return $this->belongsTo(Time::class);
    }

    public function week_day()
    {
        return $this->belongsTo(WeekDay::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
