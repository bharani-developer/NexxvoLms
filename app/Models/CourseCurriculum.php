<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCurriculum extends Model
{
    //
protected $table = 'course_curriculums';
protected $fillable =[
    'course_id',
    'heading',
    'description',

];

    public function getData()
    {
        return CourseCurriculum::orderByDesc('id')->get();
    }
    public function getDataById($id){
        return  CourseCurriculum::where('course_id',$id)->get();
    }
    
}
