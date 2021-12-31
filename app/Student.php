<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = [
        'id',
        'name',
        'password',
        'gender',
        'gpa',
        'Group',
    ];
}
