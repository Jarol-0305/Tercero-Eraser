<?php

namespace App\Http\Controllers;
use App\Movimientos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $movimientos=Movimientos::all();
         return view('home')->with('movimientos',$movimientos);
    }

}
