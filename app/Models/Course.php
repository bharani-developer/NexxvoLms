<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';
    protected $fillable =[
        'course_tittle',
        'course_name',
        'course_category_id',
        'course_shortname',
        'course_video_url',
        'course_logo',
        'course_trainer_experience',
        'course_professional_enrolled',
        'course_rating',
        'course_short_description',
        'course_delivered_by',
        'course_delivered_by_text',
        'course_intro_logo_1',
        'course_intro_logo_2',
        'course_summary_tittle',
        'course_review_schema_desc',
        'course_summary_text',
        'course_file',
        'course_content',
        'course_seo_meta_tittle',
        'course_meta_description',
        'course_meta_keyword',

    ];
    public function getData()
    {
        return static::orderBy('id','desc')->get();
    }

}
