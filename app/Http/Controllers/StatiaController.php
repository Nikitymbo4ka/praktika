<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\News;
use Illuminate\Http\Request;

class StatiaController extends Controller
{
    public function stat(){
        $news = News::all();
       return view('siteKto', compact('news'));
    }
}
