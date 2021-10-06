<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TivaDemoEvent extends Model
{
    protected $fillable = ['name','image', 'month', 'year', 'date', 'day', 'start_time', 'end_time', 'color', 'description'];
}
