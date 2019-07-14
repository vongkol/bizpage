<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
class UserController extends Controller
{
    public function _constructor()
    {
       $this->middleware('auth');
    }
    public function index()
    {
        $data['users']=DB::table('users')
        ->join('roles','users.role_id','roles.id')
        ->select('users.*','roles.name as role_name')
        ->paginate(18);
        return view('admins.users.index',$data);
    }

    public function create()
    {
        $data['roles'] = DB::table('roles')->get();
        return view('admins.users.create', $data);
    }

    public function save(Request $r)
    {
    // get data from user input
    $data = array(
        'name' => $r->name,
        'email' => $r->email,
        'phone' => $r->phone,
        'password' => bcrypt($r->password),
        'role_id' => $r->role_id
    );
    
    // compare password and confirm password
    if($r->password != $r->cpass)
    {
        $r->session()->flash('error', "Password and Confirm Password is not matched!");
        return redirect('myadmin/user/create')->withInput();
    }
    $photo = "";
    if($r->photo)
    {
        $photo = $r->file('photo')
            ->store('uploads/users', 'custom'); 
    }
    $data['photo'] = $photo;

    // save user to table and get id back
    $i = DB::table('users')->insert($data);
    if($i)
    {
        $r->session()->flash('success', 'Data has been saved!');
        return redirect('myadmin/user/create');
    }
    else{
        $r->session()->flash('error', 'Fail to save data!');
        return redirect('myadmin/user/create')->withInput();
    }
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('my-admin/user');
    }

    public function edit($id)
    {
        $data['roles'] = DB::table('roles')->get();
        $data['user'] = DB::table('users')
            ->where('id', $id)
            ->first();
            
        return view('admins.users.edit', $data);
    }
    public function update(Request $r)
    {
        // get data from user input
        $data = array(
            'name' => $r->name,
            'email' => $r->email,
            'phone' => $r->phone,
            'role_id' => $r->role_id
        );
        if($r->password!="")
        {
            $data['password'] = bcrypt($r->password);
        }
  
        if($r->photo)
        {
            $data['photo'] = $r->file('photo')
                ->store('uploads/users', 'custom'); 
        }
        // save user to table and get id back
        $i = DB::table('users')
            ->where('id', $r->id)
            ->update($data);
        if($i)
        {
            $r->session()->flash('success', 'Data has been saved!');
            return redirect('my-admin/user/edit/'.$r->id);
        }
        else{
            $r->session()->flash('error', 'Fail to save data!');
            return redirect('my-admin/user/edit/'.$r->id);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
   
}
