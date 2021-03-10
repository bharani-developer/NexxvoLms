<?php

namespace App\Http\Controllers\Admin\Management;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Page;
use Yajra\Datatables\Datatables;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
    public function index(Request $request)
    {
       
        if ($request->ajax()) {
            $page = new Page();
            $data = $page->getData();
            return DataTables::of($data)
                ->addcolumn('action', function ($data) {
                    $button = '<a href="javascript:void(0)"><button class="btn btn-float btn-square  btn-warning btn-sm editpage" data-id="' . $data->id . '" data-toggle="modal" data-target="#iconModal"><i class="far fa-edit"></i></button></a>';


                    return $button;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('admin.management.page');
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
          $page = Page::find($id);
          $page->page_name = $request->page_name;
          $page->page_title = $request->page_title;
          $page->meta_description = $request->meta_description;
          $page->meta_keyword = $request->meta_keywords;
          $page->save();
        return redirect()->action('Admin\Management\PageController@index')->with('success','Updated Successfully');
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
        $page = Page::find($id);
        return response()->json($page);
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
