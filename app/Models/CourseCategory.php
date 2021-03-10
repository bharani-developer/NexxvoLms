<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCategory extends Model
{
    protected $table = 'course_category';
    protected $fillable = [
        'name',
        'slug',
        'short_description',
        'answer',
        'key_feautures',
        'meta_tittle',
        'meta_description',
        'meta_keywords'
    ];
    public function getData()
    {
        return static::orderBy('id','desc')->get();
    }

}
