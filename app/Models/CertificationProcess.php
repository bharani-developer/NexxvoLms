<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CertificationProcess extends Model
{
   protected $table = 'course_certification_process';
   protected $fillable =[
    'course_id',
    'heading',
    'description',
    'position'

   ];
   
   public function getData()
   {
       return CertificationProcess::orderByDesc('id')->get();
   }
   public function getDataById($id){
       return  CertificationProcess::where('course_id',$id)->get();
   }
}
