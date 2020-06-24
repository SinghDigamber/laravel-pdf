<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    public $fillable = ['name', 'email', 'phone_number', 'dob'];

}
