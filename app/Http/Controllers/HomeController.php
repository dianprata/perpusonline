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

    public function index(Request $request)
    {
      $request->user()->authorizeRoles(['employee', 'manager']);
      return view('home');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function someAdminStuff(Request $request)
    {
        $request->user()->authorizeRoles('manager');
        return view('some.view');
    }
}
