<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = [
        'id',
        'firstName',
        'secondName',
        'firstLastName',
        'secondLastName',
        'age',
        'favoriteSWMovie'
    ];
}
