<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SlideController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
public function index()
{
    $data['slides']=DB::table('slides')
    ->orderBy('id','desc')
    ->paginate(18);
    return view('admins.slides.index', $data);
}
public function create()
{
    return view ('admins.slides.create');
}
public function save (Request $r)
{
    $data = array(
        'title'         => $r->title,
        'url'           => $r->url,
        'order_number'  => $r->order_number,
        'description'   => $r->description
    );
    if($r->photo)
    {
        $data['photo'] = $r->file('photo')->store('uploads/slides','custom');
    }
    $i = DB::table('slides')->insert($data);
    if($i)
    {
        $r->session()->flash('success','Data has been saved!');
        return redirect('myadmin/slide/create');
    }
    else
    {
        $r->session()->flash('error','Fail to save data!');
        return redirect('myadmin/slide/create')->withInput();
    }
}


}
