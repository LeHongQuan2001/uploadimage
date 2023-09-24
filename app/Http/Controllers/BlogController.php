<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function danhSachBlog(){
        $data=Blog::paginate(10);
        return view('Admin.Blog.danhsachblog',compact('data',$data));
    }
}
