<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Contactus extends Model
{
    protected $primaryKey = 'conus_id';
    protected $fillable = ['conus_status','conus_name','conus_email'];
}
