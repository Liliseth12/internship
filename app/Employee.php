<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use \App\Salary;

class Employee extends Model
{
    //
    public function salaries(){
    	return $this->belongsToMany(Salary::class);
    }
}
