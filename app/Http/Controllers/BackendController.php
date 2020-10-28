<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
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
        return view('back.index');
    }

    /**
     * Show the application analytics.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function analysis()
    {
        return view('back.pages.analysis');
    }

    /**
     * Show the application analytics.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function createCourse()
    {
        return view('back.pages.create-course');
    }
}
