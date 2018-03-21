<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weekday extends Model
{
    protected $fillable = ['id', 'code', 'name', 'created_by', 'modified_by'];
    //
}
