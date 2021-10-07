<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimetableEvent extends Model
{
    protected $fillable = ['title', 'image_url', 'description', 'start_date', 'start_time', 'event_type', 'duration_minutes'];

    public function getStartTimeAttribute($value)
    {
        $starts_at = explode(':', $value);
        return $starts_at[0] . ":" . $starts_at[1];
    }
}
