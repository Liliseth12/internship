<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Employee;

class Salary extends Model
{
    //
    public function employees(){
    	return $this->belongsToMany(Employee::class);
    }
}
