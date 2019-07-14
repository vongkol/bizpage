<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data['features']=DB::table('features')->get();
        $data['about']=DB::table('abouts')
        ->where('id', 1)
        ->first();
        $data['about_us'] = DB::table('about_us')->get();

        $data['service'] = DB::table('services')
            ->where('id', 1)
            ->first();

        $data['our_services'] = DB::table('our_services')->get();   

        $data['action']=DB::table('actions')
            ->where('id', 1)
            ->first();

        $data['fact'] = DB::table('facts')
            ->where('id', 1)
            ->first();

        return view('Home',$data);

    
    }
}
