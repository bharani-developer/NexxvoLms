<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Venue;
use Yajra\Datatables\Datatables;

class VenueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $venue = new Venue();
            $data = $venue->getData();
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editvenue"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deletevenue"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.management.venue');
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
        if ($request->venue_id) {
            $venue_id = $request->venue_id;
            $venue = Venue::find($venue_id);
            $venue->address = $request->address;
            $venue->save();
            return redirect()->action('Admin\Management\VenueController@index')->with('success', 'Course Category Updated Successfully');
        } else {
            $venue = new Venue();
            $venue->address = $request->address;
            $venue->save();
            return redirect()->action('Admin\Management\VenueController@index')->with('success', 'Course Category Created Successfully');
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
        $venue = Venue::find($id);
        return response()->json($venue);
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
        Venue::find($id)->delete();

        return response()->json(['success' => 'Venue deleted successfully.']);
    }
}
