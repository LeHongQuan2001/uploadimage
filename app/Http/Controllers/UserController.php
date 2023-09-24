<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function danhSachUser(){
    $data=Users::paginate(10); 

    // $data=Users::all();
    // dd($data);
    return view('Admin.User.danhsachuser',compact('data',$data));
    }
}
