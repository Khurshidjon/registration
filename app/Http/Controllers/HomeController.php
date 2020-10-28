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
        return view('front.index', [
            'is_active' => 'home'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show()
    {
        return view('front.pages.show', [
            'is_active' => 'show'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liveStreams()
    {
        return view('front.pages.live-streams', [
            'is_active' => 'live-stream'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function liveOutput()
    {
        return view('front.pages.live-output', [
            'is_active' => 'live-output'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function categories()
    {
        return view('front.pages.categories', [
            'is_active' => 'categories'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function certificationCenter()
    {
        return view('front.pages.certification-center', [
            'is_active' => 'certification-center'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function certificationStartForm()
    {
        return view('front.pages.certification-start-from', [
            'is_active' => 'certification-start-form'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function certificationView()
    {
        return view('front.pages.certification-view', [
            'is_active' => 'certification-view'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function certificationResult()
    {
        return view('front.pages.certification-result', [
            'is_active' => 'certification-result'
        ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function settings()
    {
        return view('front.pages.settings', [
            'is_active' => 'settings'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function help()
    {
        return view('front.pages.help', [
            'is_active' => 'help'
        ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function savedCourses()
    {
        return view('front.pages.saved-courses', [
            'is_active' => 'saved-courses'
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function feedback()
    {
        return view('front.pages.feedback', [
            'is_active' => 'feedback'
        ]);
    }
}
