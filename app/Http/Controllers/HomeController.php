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

    public function show_em(){
        return view('employee');
    }
    public function adminlist()
    {
        return view('admin');
    }
    public function attendance_r()
    {
        return view('attendance');
    }
    public function leave_r()
    {
        return view('leave');
    }
}
