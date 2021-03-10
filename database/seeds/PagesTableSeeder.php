<?php

use Illuminate\Database\Seeder;
use App\Models\Page;

class PagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    { 
        Page::truncate();
        DB::table('pages')->insert(
            [
                [
                    'page_name' => 'Blog',
                    'page_title' => 'Blog',
                    'page_title' => 'Blog',
                    'meta_description' => 'Blog',
                    'meta_keyword' => 'Blog',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'About',
                    'page_title' => 'About',
                    'page_title' => 'About',
                    'meta_description' => 'About',
                    'meta_keyword' => 'About',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Contact',
                    'page_title' => 'Contact',
                    'page_title' => 'Contact',
                    'meta_description' => 'Contact',
                    'meta_keyword' => 'Contact',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Corporate Training',
                    'page_title' => 'Corporate Training',
                    'page_title' => 'Corporate Training',
                    'meta_description' => 'Corporate Training',
                    'meta_keyword' => 'Corporate Training',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Courses',
                    'page_title' => 'Courses',
                    'page_title' => 'Courses',
                    'meta_description' => 'Courses',
                    'meta_keyword' => 'Courses',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'FAQ',
                    'page_title' => 'FAQ',
                    'page_title' => 'FAQ',
                    'meta_description' => 'FAQ',
                    'meta_keyword' => 'FAQ',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Home',
                    'page_title' => 'Home',
                    'page_title' => 'Home',
                    'meta_description' => 'Home',
                    'meta_keyword' => 'Home',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Privacy Policy',
                    'page_title' => 'Privacy Policy',
                    'page_title' => 'Privacy Policy',
                    'meta_description' => 'Privacy Policy',
                    'meta_keyword' => 'Privacy Policy',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Resource',
                    'page_title' => 'Resource',
                    'page_title' => 'Resource',
                    'meta_description' => 'Resource',
                    'meta_keyword' => 'Resource',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'page_name' => 'Terms And Condition',
                    'page_title' => 'Terms And Condition',
                    'page_title' => 'Terms And Condition',
                    'meta_description' => 'Terms And Condition',
                    'meta_keyword' => 'Terms And Condition',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],

            ],
        );
    }
}
