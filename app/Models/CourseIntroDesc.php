<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseIntroDesc extends Model
{
    protected $table ="course_intro_descs";
    protected $fillable =[
        'course_id',
        'heading',
        'description',

    ];
    public function getData()
    {
        return CourseIntroDesc::orderByDesc('id')->get();
    }
    public function getDataById($id){
        return  CourseIntroDesc::where('course_id',$id)->get();
    }
}
