<?php

namespace App\Http\Controllers;

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
        return view('home');
    }

<<<<<<< HEAD
     /**
     * Show the admin home.
=======
    /**
     * Show the application dashboard.
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
<<<<<<< HEAD
        return view('admin.home');
=======
        return view('admin.dashboard');
>>>>>>> 15a10f0a9162546ce1e0e7d1195aadcffb9eafa3
    }
}
