<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    protected $primaryKey = 'role_id'; 
    protected $fillable = ['role_status','role_name'];
}
