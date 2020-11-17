<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'weekday_monday',
        'weekday_tuesday',
        'weekday_wednesday',
        'weekday_thursday',
        'weekday_friday',
        'weekday_saturday',
        'time_morning',
        'time_afternoon',
        'time_night',
    ];
}
