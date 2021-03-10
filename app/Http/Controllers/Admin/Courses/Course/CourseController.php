<?php

namespace App\Http\Controllers\Admin\Courses\Course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
use Yajra\Datatables\Datatables;


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $course = new Course();
            $data = $course->getData();
            
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button='<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="View"  class="btn btn-float btn-square btn-primary btn-sm viewCourse"><i class="fa fa-eye"></i></a>';
                    $button =$button . '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm activeCourse"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deleteCourse"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.courses.course.list');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.courses.course.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $course = new Course();
        $course->course_tittle = $request->course_tittle;
        $course->course_name = $request->course_name;
        $course->course_category_id = $request->course_category_id;
        $course->course_shortname = $request->course_shortname;
        $course->course_video_url = $request->course_video_url;
        $file = $request->file('course_logo');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/course', $name);

        $course->course_logo = "images/course/{$name}";

        $course->course_trainer_experience = $request->course_trainer_experience;
        $course->course_professional_enrolled = $request->course_professional_enrolled;
        $course->course_rating = $request->course_rating;
        $course->course_short_description = $request->course_short_description;
        $course->course_delivered_by = $request->course_delivered_by;
        $course->course_delivered_by_text = $request->course_delivered_by_text;
        $file = $request->file('course_intro_logo_1');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/course', $name);
        $course->course_intro_logo_1 = "images/course/{$name}";
        $course->course_intro_logo_2 = "images/course/{$name}";
        $file = $request->file('course_intro_logo_2');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/course', $name);

        $course->course_intro_logo_2 = "images/course/{$name}";
        $course->course_summary_tittle = $request->course_summary_tittle;
        $course->course_review_schema_desc = $request->course_review_schema_desc;
        $course->course_summary_text = $request->course_summary_text;
        $file = $request->file('course_file');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/course', $name);

        $course->course_file = "images/course/{$name}";
        $file = $request->file('course_content');
        $name = time() . $file->getClientOriginalName();
        $file->move('images/course', $name);

        $course->course_content = "images/course/{$name}";
        $course->course_seo_meta_tittle = $request->course_seo_meta_tittle;
        $course->course_meta_description = $request->course_meta_description;
        $course->course_meta_keyword = $request->course_meta_keyword;
        $course->save();
        return redirect()->action('Admin\Courses\Course\CourseController@index')->with('success', 'Course Category Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
