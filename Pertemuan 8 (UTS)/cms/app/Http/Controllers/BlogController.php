<?php

namespace App\Http\Controllers;

use App\Culture;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
class BlogController extends Controller
{
    public function blog()
    {   
        $cultures = Culture::all();
        return view('blog',['cultures'=> $cultures]);
    }
    // -----Menggunakan Cache-----
    // public function blog()
    // {   
    //     $cultures = Cache::rememberForever('cultures', function(){
    //         return Culture::all();
    //     });
    //     return view('blog',['cultures'=> $cultures]);
    // }
}

    /*------------------------ KUIS 1 -----------------------
    //TANPA CACHE
    public function blog()
    {
        $cultures = Culture::all();
        return view('kuis1.blog',['cultures'=> $cultures]);
    }

    public function blog()
    {
        $cultures = Cache::rememberForever('cultures', function(){
            return Culture::all();
        });
        return view('kuis1.blog',['cultures'=> $cultures]);
    }


    ----------------------------------------------------------*/