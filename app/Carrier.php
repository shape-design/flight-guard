<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrier extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'code', 'created_by', 'modified_by'];
    //
}
