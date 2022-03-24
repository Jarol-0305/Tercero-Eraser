<?php

namespace App\Http\Controllers;
use App\Movimientos;
use Illuminate\Http\Request;
use DB;

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
        //$movimientos=Movimientos::all();
        $movimientos=DB::select("SELECT * FROM movimientostable m join categorytable c on m.cat_id=c.cat_id");
         return view('home')->with('movimientos',$movimientos);
    }

}
