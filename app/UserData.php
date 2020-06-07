<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserData extends Model
{
    

    protected $fillable = ['User_name','Address','Mobile'];
    protected $table = 'user_data';
    
}
