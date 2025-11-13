<?php

namespace App\Http\Controllers\Dashpoard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashpoardController extends Controller
{
    public function __construct(){
        $this->middleware(['auth','verified'])/*->except('index')*/;//and only

       }
    public function index()
    {
        $user = 'ahmed farag mousa';
        $title = 'store';
        // 
        //return :____view___ and json data and redirect ,file
        // return view('dashposrd',compact('user','title'));//compact return array
        // return View::make('dashposrd')->with(key: 'user','ahmed farag mousa')->with('title','store');
        // return Response::view('dashposrd',compact('user','title'));
        return view('dashpoard.index', ['user' => $user, 'title' => $title]);
    }
}
