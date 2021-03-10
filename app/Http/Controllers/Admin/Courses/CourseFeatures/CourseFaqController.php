<?php

namespace App\Http\Controllers\Admin\Courses\CourseFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseFaq;
use Yajra\Datatables\Datatables;

class CourseFaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $coursefaq = new CourseFaq();
            $id = $_GET['id'];

            $data = $coursefaq->getDataById($id);
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editCourseCurriculam"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deleteCourseCurriculam"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->course_faq_id) {
            $course_faq_id = $request->course_faq_id;
            $coursefaq = CourseFaq::find($course_faq_id);
            $coursefaq->course_id = $request->course_id;
            $coursefaq->heading = $request->heading;
            $coursefaq->description = $request->description;
            $coursefaq->save();
            return 'success';
        } else {
            $coursefaq = new CourseFaq();
            $coursefaq->course_id = $request->course_id;
            $coursefaq->heading = $request->heading;
            $coursefaq->description = $request->description;
            $coursefaq->save();
            return 'success';
        }
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
    public function createcoursefaq($id)
    {
       
        return view('admin.courses.coursefeautures.coursefaq', compact('id'));
    }
}
