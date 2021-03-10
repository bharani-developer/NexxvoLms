<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseFaq extends Model
{
       //
protected $table = 'course_faqs';
protected $fillable =[
    'course_id',
    'heading',
    'description',

];

    public function getData()
    {
        return CourseFaq::orderByDesc('id')->get();
    }
    public function getDataById($id){
        return  CourseFaq::where('course_id',$id)->get();
    }
    
}
