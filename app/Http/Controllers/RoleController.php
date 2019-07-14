<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class RoleController extends Controller
{
    public function index()
    {
        $data['roles']=DB::table('roles')->get();
        return view('admins.roles.index',$data);
    }

    public function create()
    {
        return view('admins.roles.create');
    }

    public function save(Request $r)
    {
        $data = array(
            'name' => $r->name
        );
        $i = DB::table('roles')->insert($data);
        if($i)
        {
            $r->session()->flash('success', "Data has been saved!");
            return redirect('myadmin/role/create');
        }
        else{
            $r->session()->flash('error', "Fail to save data!");
            return redirect('myadmin/role/create')->withInput();
        }
    }
        public function delete($id)
    {
        DB::table('roles')->where('id', $id)->delete();
        return redirect('myadmin/role');
    }
    public function edit($id)
    {
        $data['role'] = DB::table('roles')
            ->where('id', $id)
            ->first();
        return view('admins.roles.edit', $data);
    }

    public function update(Request $r)
    {
        $data = array(
            'name' => $r->name
        );
        $i = DB::table('roles')
            ->where('id', $r->id)
            ->update($data);
        if($i)
        {
            $r->session()->flash('success', "Data has been saved!");
            return redirect('myadmin/role/'.$r->id);
        }
        else{
            $r->session()->flash('error', "Fail to save data!");
            return redirect('myadmin/role/edit/'.$r->id);
        }
    }
    }

