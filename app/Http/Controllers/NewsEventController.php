<?php

namespace App\Http\Controllers;

use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\File;
use App\NewsEvent;
use App\NewsGallery;

class NewsEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    function __construct() {

        $this->middleware('auth');
    }

    public function index()
    {
        //
        $new = NewsEvent::orderby('id','desc')->paginate(15);
        $count = NewsEvent::count();
        return view('Admin.News.index', ['new' => $new , 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.News.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        //
        $news = new NewsEvent();
        $news->n_name = $request->name;
        $news->n_des = $request->des;
        $news->n_detail = $request->detail;
        $news->n_show = 1;


        if ($request->hasFile('image')) {
            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $news->n_pic = $filename;
        } else {
            $news->n_pic = 'no_pic.png';
        }
        Session::flash('status', 'success');
        $news->save();


        return redirect('Admin/News');
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
        $ss = NewsEvent::find($id);
        if ($ss->n_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->n_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->n_pic);
            }
        }
        $ss->n_pic = 'no_pic.png';
        $ss->save();
        return view('Admin.News.edit', ['news' => $ss]);
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
        $news = NewsEvent::find($id);
        return view('Admin.News.edit', ['news' => $news]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsRequest $request, $id)
    {
        //
        $news = NewsEvent::find($id);
        $news->n_name = $request->name;
        $news->n_des = $request->des;
        $news->n_detail = $request->detail;

        if ($request->hasFile('image')) {

            if($news->n_pic != 'no_pic.png'){
                if (file_exists(public_path() . '/img/upload/' . $news->n_pic)) {
                    File::delete(public_path() . '/img/upload/' . $news->n_pic);
                }
            }

            $filename = str_random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/img/upload/', $filename);
            $news->n_pic = $filename;
        }
        Session::flash('status', 'success');
        $news->save();

        return redirect('Admin/News');
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
        $ss = NewsEvent::find($id);
        if ($ss->n_pic != 'no_pic.png') {
            if (file_exists(public_path() . '/img/upload/' . $ss->n_pic)) {
                File::delete(public_path() . '/img/upload/' . $ss->n_pic);
            }
        }

        $rr = NewsGallery::where('n_id', $id)->get();
        foreach ($rr as $ss) {
            if ($ss->ng_pic != 'no_pic.png') {
                if (file_exists(public_path() . '/img/upload/' . $ss->ng_pic)) {
                    File::delete(public_path() . '/img/upload/' . $ss->ng_pic);
                }
            }
            NewsGallery::destroy($ss->id);
        }

        NewsEvent::destroy($id);
        Session::flash('status', 'success');
        return redirect('Admin/News');
    }




    public function settest($id1 , $id2)
    {
        $r = NewsEvent::find($id1);
        $r->n_show = $id2;
        $r->save();
        return back();
    }



}
