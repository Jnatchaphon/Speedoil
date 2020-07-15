<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\ProGallery;
use App\Products;
use Illuminate\Support\Facades\View;

class PGalleryController extends Controller
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
        $gal = ProGallery::where('p_id', $id)->orderby('id', 'desc')->get();
        $count = ProGallery::where('p_id', $id)->count();
        return view('Admin.Product.gal', ['id' => $id, 'gal' => $gal, 'count' => $count]);
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
                $productImage = ProGallery::create(['pg_pic' => $filename, 'p_id' => $id]);
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
        $ss = ProGallery::find($id);
        if ($ss->pg_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->pg_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->pg_pic);
            }
        }
        ProGallery::destroy($id);
        Session::flash('status', 'success');
        return back();
    }




}
