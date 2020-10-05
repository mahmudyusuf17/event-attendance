<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     * 
     */
    protected $redirectTo = RouteServiceProvider::LOGIN;

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application profile admin.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.profile');
    }
}
