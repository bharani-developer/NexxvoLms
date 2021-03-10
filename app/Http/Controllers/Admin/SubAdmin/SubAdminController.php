<?php

namespace App\Http\Controllers\Admin\SubAdmin;

use App\Http\Controllers\Controller;
use App\User;
use App\Role;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Hash;



class SubAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $user = new User();


            $data = $user->get();
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Edit" class="btn btn-float btn-square btn-warning btn-sm editsubadmin"><i class="fa fa-edit"></i></a>';

                    $button = $button . ' <a href="javascript:void(0)" data-toggle="tooltip"  data-id="' . $data->id . '" data-original-title="Delete" class="btn btn-float btn-square btn-danger btn-sm deletesubadmin"><i class="fa fa-trash"></i></a>';

                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        $roles = Role::get();

    
        return view('admin.subadmin.index',compact('roles'));
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
        
        if ($request->user_id) {
            $id = $request->user_id;
            $user = user::find($id);
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
           
            $user->save();
            return redirect()->action('Admin\SubAdmin\SubAdminController@index')->with('success', 'SubAdmin Updated Successfully');
        } else {
            $role = 'Test';
            $user = new user();
            $user->email = $request->email;
            $user->name = $request->name;
            $user->password = Hash::make($request->password);
            $user->save();
            return redirect()->action('Admin\SubAdmin\SubAdminController@index')->with('success', 'SubAdmin Created Successfully');
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
      
        $user = User::find($id);
        return response()->json($user);
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
