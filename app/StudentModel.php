<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StudentModel extends Model
{
    protected $table='student';
    protected $fillable=['name','bangla_name','roll', 'dept', 'info'];
}
