<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use Yajra\Datatables\Datatables;


class CourseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $coursecategory = new CourseCategory();
            $data = $coursecategory->getData();
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editCourseCategory"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deleteCourseCategory"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.management.coursecategory');
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
        if ($request->coursecategory_id) {
            $coursecategory_id = $request->coursecategory_id;
            $coursecategory = CourseCategory::find($coursecategory_id);
            $coursecategory->name = $request->name;
            $coursecategory->slug = $request->slug;
            $coursecategory->summary = $request->summary;
            $coursecategory->short_description = $request->short_description;
            $coursecategory->key_feautures = $request->key_feautures;
            $coursecategory->meta_tittle = $request->meta_tittle;
            $coursecategory->meta_description = $request->meta_description;
            $coursecategory->meta_keywords = $request->meta_keywords;
            $coursecategory->save();
            return redirect()->action('Admin\Management\CourseCategoryController@index')->with('success', 'Course Category Updated Successfully');
        } else {
            $coursecategory = new CourseCategory();
            $coursecategory->name = $request->name;
            $coursecategory->slug = $request->slug;
            $coursecategory->summary = $request->summary;
            $coursecategory->short_description = $request->short_description;
            $coursecategory->key_feautures = $request->key_feautures;
            $coursecategory->meta_tittle = $request->meta_tittle;
            $coursecategory->meta_description = $request->meta_description;
            $coursecategory->meta_keywords = $request->meta_keywords;
            $coursecategory->save();
            return redirect()->action('Admin\Management\CourseCategoryController@index')->with('success', 'Course Category Created Successfully');
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
        $coursecategory = CourseCategory::find($id);
        return response()->json($coursecategory);
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
        
        CourseCategory::find($id)->delete();
     
        return response()->json(['success'=>'Course Category deleted successfully.']);

    }
}
