<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\NewsEvent;
use App\Dealer;
use App\Province;
use NunoMaduro\Collision\Provider;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    //
    public function index()
    {
        $pro = Products::orderby('id', 'desc')->get();
        $news = NewsEvent::orderby('id', 'desc')->limit(1)->offset(0)->get();
        $news1 = NewsEvent::orderby('id', 'desc')->limit(1)->offset(1)->get();
        $news2 = NewsEvent::orderby('id', 'desc')->limit(1)->offset(2)->get();
        return view('Home.index', ['pro' => $pro, 'news' => $news, 'news1' => $news1, 'news2' => $news2]);
    }


    public function north()
    {
        $a = Province::where('GEO_ID', '1')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.north', ['bb' => $bb]);
    }


    public function northeast()
    {
        $a = Province::where('GEO_ID', '3')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.northeast', ['bb' => $bb]);
    }


    public function south()
    {
        $a = Province::where('GEO_ID', '6')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.south', ['bb' => $bb]);
    }


    public function west()
    {
        $a = Province::where('GEO_ID', '4')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.west', ['bb' => $bb]);
    }


    public function east()
    {
        $a = Province::where('GEO_ID', '5')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.east', ['bb' => $bb]);
    }

    public function central()
    {
        $a = Province::where('GEO_ID', '2')->get();
        $bb = array();
        foreach ($a as $aa) {
            $bb[] = DB::table('dealer')
                ->join('province', 'dealer.PROVINCE_ID', '=', 'province.PROVINCE_ID')
                ->where('dealer.PROVINCE_ID', $aa->PROVINCE_ID)->groupBy('dealer.PROVINCE_ID')->get(array('dealer.PROVINCE_ID'));
        }

        return view('Home.Dealer.central', ['bb' => $bb]);
    }


    public static function getval($id)
    {
        $xx = Dealer::where('PROVINCE_ID','=', $id)->get();

        return $xx;
    }

    public static function getprov($id)
    {
        $xx = Province::where('PROVINCE_ID','=', $id)->get();

        return $xx;
    }


    public function test()
    {

        return view('Home.test');
    }

}
