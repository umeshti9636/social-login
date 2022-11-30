<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    use HasFactory;
    protected $table='users';
    protected $primarykey='id';
    public function setNameAttribute($value){

        $this->attributes['name'] = ucwords($value);
    }
}
