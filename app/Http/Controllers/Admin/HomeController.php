<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //! get the currently authenticated user's id
        $id = Auth::id();
        //! get the currently authenticated user
        $user = Auth::user();
        //? dd($user, $id);
        //? dd(Auth::check()); it gives me true or false

        //! compact (id and user) are reusable in the home
        return view('admin.home', compact('id', 'user'));
    }
}
