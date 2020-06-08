<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected $table = 'data_report';
    protected $fillable = ['username','mynik','myphone','age','job','user_infec','user_nik','date','region','user_age','address'];
}
