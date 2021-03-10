<?php

namespace App\Http\Controllers\Admin\Courses\CourseFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCurriculum;
use Yajra\Datatables\Datatables;

class CourseCurriculamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $courseCurriculum = new CourseCurriculum();
            $id = $_GET['id'];

            $data = $courseCurriculum->getDataById($id);
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editCourseCurriculam"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deleteCourseCurriculam"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.courses.coursefeautures.coursecurriculam');
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


        if ($request->course_curriculum_id) {
            $course_curriculum_id = $request->course_curriculum_id;
            $coursecurriculum = coursecurriculum::find($course_curriculum_id);
            $coursecurriculum->course_id = $request->course_id;
            $coursecurriculum->heading = $request->heading;
            $coursecurriculum->description = $request->description;
            $coursecurriculum->save();
            return  redirect::back()->with('success', 'Course Category Updated Successfully');
        } else {
            $coursecurriculum = new coursecurriculum();
            $coursecurriculum->course_id = $request->course_id;
            $coursecurriculum->heading = $request->heading;
            $coursecurriculum->description = $request->description;
            $coursecurriculum->save();
            return redirect::back()->with('success', 'Course Category Updated Successfully');
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
        $courseCurriculum = CourseCurriculum::find($id);
        return response()->json($courseCurriculum);
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
        CourseCurriculum::find($id)->delete();

        return response()->json(['success' => 'Course Category deleted successfully.']);
    }
    public function createcurriculum ($id)
    {
        return view('admin.courses.coursefeautures.coursecurriculam', compact('id'));
    }
}
