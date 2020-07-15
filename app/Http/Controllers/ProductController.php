<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProRequest;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\Products;
use App\ProGallery;
use Illuminate\Support\Facades\URL;

class ProductController extends Controller
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
        $pro = Products::orderby('id', 'desc')->paginate(15);
        $count = Products::count();
        return view('Admin.Product.index', ['pro' => $pro, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProRequest $request)
    {

        $pro = new Products();
        $pro->p_name = $request->name;
        $pro->p_des = $request->des;
        $pro->p_detail = $request->detail;
        $pro->p_show = 1;


        if ($request->hasFile('image')) {
            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/' , $filename);
            $pro->p_pic = $filename;
        } else {
            $pro->p_pic = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $pro->save();


        return redirect('Admin/Product');


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
        $ss = Products::find($id);
        if ($ss->p_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->p_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->p_pic);
            }
        }
        $ss->p_pic = 'no_pic.png';
        $ss->save();
        return view('Admin.Product.edit', ['pro' => $ss]);
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
        $pro = Products::find($id);
        return view('Admin.Product.edit', ['pro' => $pro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProRequest $request, $id)
    {
        //
        $pro = Products::find($id);
        $pro->p_name = $request->name;
        $pro->p_des = $request->des;
        $pro->p_detail = $request->detail;

        if ($request->hasFile('image')) {

            if ($pro->p_pic != 'no_pic.png') {
                if (file_exists(public_path() . '/img/upload/' . $pro->p_pic)) {
                    File::delete(public_path() . '/img/upload/' . $pro->p_pic);
                }
            }

            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $pro->p_pic = $filename;
        }
        Session::flash('status', 'success');
        $pro->save();

        return redirect('Admin/Product');
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
        $ss = Products::find($id);
        if ($ss->p_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->p_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->p_pic);
            }
        }


        $rr = ProGallery::where('p_id', $id)->get();
        foreach ($rr as $ss) {
            if ($ss->pg_pic != 'no_pic.png') {
                if (file_exists(public_path() . '/img/upload/' . $ss->pg_pic)) {
                    File::delete(public_path() . '/img/upload/' . $ss->pg_pic);
                }
            }
            ProGallery::destroy($ss->id);
        }

        Products::destroy($id);

        Session::flash('status', 'success');
        return redirect('Admin/Product');
    }


    public function settest($id1 , $id2)
    {
        $r = Products::find($id1);
        $r->p_show = $id2;
        $r->save();
        return back();
    }

}
