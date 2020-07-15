<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dealer;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\DealerRequest;
use App\Province;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dd = Dealer::orderby('id', 'desc')->paginate(15);
        $count = Dealer::count();
        return view('Admin.Dealer.index', ['dd' => $dd, 'count' => $count]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $dd = Province::orderby('PROVINCE_NAME', 'asc')->get();
        return view('Admin.Dealer.create', ['dd' => $dd]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DealerRequest $request)
    {
        //
        $d = new Dealer();
        $d->d_name = $request->name;
        $d->d_tel = $request->tel;
        $d->d_show = 1;
        $d->PROVINCE_ID = $request->prov;
        $d->save();

        Session::flash('status', 'success');
        return redirect('Admin/Dealer');
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
        $d = Dealer::find($id);
        $dd = Province::orderby('PROVINCE_NAME', 'asc')->get();

        return view('Admin.Dealer.edit', ['d' => $d, 'dd' => $dd]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DealerRequest $request, $id)
    {
        //
        $d = Dealer::find($id);
        $d->d_name = $request->name;
        $d->d_tel = $request->tel;
        $d->PROVINCE_ID = $request->prov;

        Session::flash('status', 'success');
        $d->save();

        return redirect('Admin/Dealer');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Dealer::destroy($id);
        Session::flash('status', 'success');
        return redirect('Admin/Dealer');
    }



    public function settest($id1 , $id2)
    {
        $r = Dealer::find($id1);
        $r->d_show = $id2;
        $r->save();
        return back();
    }


    public static function getprov($id)
    {
        $xx = Province::where('PROVINCE_ID','=', $id)->get();
        return $xx;

    }


}
