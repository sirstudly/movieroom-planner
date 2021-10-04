<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimetableEvent extends Model
{
    protected $fillable = ['title','description', 'start_date', 'start_time', 'duration_minutes'];
}
