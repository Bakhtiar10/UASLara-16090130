<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rumah;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $datas = Rumah::all()->where('deleted',0);
        return view('users.pages.home', compact('datas'));
    }
}
