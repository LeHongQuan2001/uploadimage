<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\DB;

class CatagoryController extends Controller
{
    public function danhSachSanPham(){
      //  $data=Category::all(); //cach 1
     // $category
    //  $data=Category::paginate(10);
    //  // dd($data);   //cach2
    //     return view('Admin.catagory.danhsach',['categoryData'=>$data]);

        $data=Category::paginate(10); 
        return view('Admin.catagory.danhsach',compact('data',$data));
        
        
    }

    
}
