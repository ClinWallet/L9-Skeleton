<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User; //nb

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
    public function index(Request $request)
    {
        
        $user = auth()->user();
        $rolls = $user->getRoleNames(); // Returns a collection
        $perms = $user->getAllPermissions(); // Returns a collection
        return view('home', compact('rolls','perms'));

        return view('home');
    }
}
