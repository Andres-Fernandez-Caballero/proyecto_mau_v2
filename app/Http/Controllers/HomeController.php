<?php

namespace App\Http\Controllers;

use App\Models\Pintura;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;

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
        if(Auth::guest()){
            return view('sections.wellcome');
        }else{
            $pinturas = Pintura::all();
            return view('sections.produts_in_stock')->with('pinturas', $pinturas);
        }
    }

    public function productStock(){
        
    }
}