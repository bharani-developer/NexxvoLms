<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Yajra\Datatables\Datatables;

class TeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
        $teammember = new TeamMember();
        $data = $teammember->getData();
        return DataTables::of($data)
            ->addcolumn('action', function ($data) {
                $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editteammember"><i class="fa fa-edit"></i></a>';

                $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger deleteteammember"><i class="fa fa-trash"></i></a>';

                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
    }
        return view('admin.management.teamMember');
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
        if ($request->teammember_id) {
            $teammember_id = $request->teammember_id;
            $teammember = TeamMember::find($teammember_id);
            $teammember->name = $request->name;
            $teammember->designation = $request->designation;
            $teammember->order = $request->order;
            $teammember->linkedin = $request->linkedin;
            $teammember->description = $request->description;
            $file = $request->file('teammember_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/TeamMembers' ;
            $file->move($destinationPath,$fileName);
            $teammember->image = $fileName ;
 

          
            $teammember->save();
            return redirect()->action('Admin\Management\TeamMemberController@index')->with('success', 'Course Category Updated Successfully');
        } else {
            $teammember = new TeamMember();
            $teammember->name = $request->name;
            $teammember->designation = $request->designation;
            $teammember->order = $request->order;
            $teammember->linkedin = $request->linkedin;
            $teammember->description = $request->description;
            $teammember->image = $request->teammemberimage;
            $file = $request->file('teammember_image') ;
            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/images/TeamMembers' ;
            $fileName=$file->move($destinationPath,$fileName);
            
            $teammember->image = $fileName ;

         
            $teammember->save();
            return redirect()->action('Admin\Management\TeamMemberController@index')->with('success', 'Course Category Created Successfully');
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
        $teammember = TeamMember::find($id);
        return response()->json($teammember);
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
          
        TeamMember::find($id)->delete();
     
        return response()->json(['success'=>'Product deleted successfully.']);
    }
}
