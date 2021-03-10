<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EnrollmentLabel;

class EnrollmentLabelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = EnrollmentLabel::all()->first();
        return view('admin.management.enrollmentlabel', compact('data'));
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
        $id =1;
          $content = EnrollmentLabel::find($id);
          $content->label_1_course = $request->label_1_course;
          $content->label_2_fee = $request->label_2_fee;
          $content->label_3_date = $request->label_3_date;
          $content->label_4_batch_id = $request->label_4_batch_id;
          $content->label_5_trainer = $request->label_5_trainer;
          $content->label_6_duration = $request->label_6_duration;
          $content->label_7_session = $request->label_7_session;
          $content->label_8_available_seats = $request->label_8_available_seats;
          $content->label_9_venue = $request->label_9_venue;
          $content->label_10_timings = $request->label_10_timings;
          $content->label_11_days_count = $request->label_11_days_count;
          $content->description = $request->description;
          $content->save();
        return redirect()->action('admin\management\EnrollmentLabelController@index')->with('success','Updated Successfully');
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
