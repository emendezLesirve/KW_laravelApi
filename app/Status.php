<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $primaryKey='id_status';
    
    public $timestamps=false;
    protected $fillable = ['name','description','created_at','updated_at'];
}
