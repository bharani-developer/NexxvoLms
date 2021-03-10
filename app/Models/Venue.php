<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Venue extends Model
{
   protected $table = 'venues' ;
   protected $fillable =[
       'address'
   ];
   public function getData()
   {
       return static::orderBy('id','desc')->get();
   }
}
