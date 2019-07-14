<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function index()
{
    $data['pages'] =DB::table('pages')
    ->orderBy('id','desc')
    ->paginate(18);
    return view('admins.pages.index', $data);
}

public function create()
{
    return view('admins.pages.create');
}


// fu
public function save(Request $r)
{
    $data = array(
        'title'=>$r->title,
        'description'=> $r->description
    );
    $i =DB::table('pages')->insertGetId($data);
    if($i)
    {
        DB::table('pages')->where('id', $i)
        ->update(['url'=>'page/'.$i]);
    }
    return redirect('myadmin/page/create');
}

}
