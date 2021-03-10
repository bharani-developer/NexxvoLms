<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EnrollmentLabel extends Model
{
    protected $table = 'enrollment_labels';
    protected $fillable = [
        'label_1_course',
        'label_2_fee',
        'label_3_date',
        'label_4_batch_id',
        'label_5_trainer',
        'label_6_duration',
        'label_7_session',
        'label_8_available_seats',
        'label_9_venue',
        'label_10_timings   ',
        'label_11_days_count',
        'description',

    ];

    public function getData()
    {
        return static::orderBy('id', 'desc')->get();
    }
}
