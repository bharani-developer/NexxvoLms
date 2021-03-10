<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Content;

class ContentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Content::truncate();
        DB::table('contents')->insert(
            [
                    'facebook' => 'https://www.facebook.com/nexevo',
                    'twitter' => 'https://twitter.com/nexevo',
                    'linkedin' => 'https://www.linkedin.com/company/nexevo',
                    'youtube' => 'https://inagram.com/nexevo',
                    'instagram' => 'https://youtube.com/nexevo',
                    'email' => 'admin@nexevo.in',
                    'phone_number' => '0123456789',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),  
            ]
        );
       
    }
}
