<?php

namespace App\Http\Controllers;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\NewsGallery;

class NGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //
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
        //
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
        $gal = NewsGallery::where('n_id', $id)->orderby('id', 'desc')->get();
        $count = NewsGallery::where('n_id', $id)->count();
        return view('Admin.News.gal', ['id' => $id, 'gal' => $gal, 'count' => $count]);
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
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $file) {
                $filename = str_random(10) . '.' . $file->getClientOriginalExtension();
                $file->move(public_path() . '/img/upload/', $filename);
                $productImage = NewsGallery::create(['ng_pic' => $filename, 'n_id' => $id]);
            }
        }


        return back();
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
        $ss = NewsGallery::find($id);
        if ($ss->ng_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->ng_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->ng_pic);
            }
        }
        NewsGallery::destroy($id);
        Session::flash('status', 'success');
        return back();
    }
}
