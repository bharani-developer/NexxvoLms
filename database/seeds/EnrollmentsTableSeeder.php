<?php

use Illuminate\Database\Seeder;
use App\Models\EnrollmentLabel;

class EnrollmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EnrollmentLabel::truncate();
        DB::table('enrollment_labels')->insert(
            [
               
                    'label_1_course' => 'Course',
                    'label_2_fee' => 'Fee',
                    'label_3_date' => 'Date',
                    'label_4_batch_id' => 'Batch ID',
                    'label_5_trainer' => 'Trainer',
                    'label_6_duration' => 'Duration',
                    'label_7_session' => 'Session',
                    'label_8_available_seats' => 'Available Seats',
                    'label_9_venue' => 'Venue',
                    'label_10_timings' => 'Timings',
                    'label_11_days_count' => 'Days Count',
                    'description' => 'Description',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
               
            ]
        );
    }
}
