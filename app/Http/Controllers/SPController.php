<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SPController extends Controller
{
    public function danhMucSanPham(){
        return view('Admin.catagory.danhmucsp');
    }
}
