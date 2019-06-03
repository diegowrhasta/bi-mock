<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attendant extends Model
{
    protected $table='attendants';
    protected $primaryKey='id_attendant';
    protected $fillable = [
        'first_name', 'last_name', 'email','password','status',
    ];
    protected $hidden = [
        'password', 'remember_token','created_at','updated_at',
    ];

}
