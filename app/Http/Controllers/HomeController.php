<?php

namespace App\Http\Controllers;

use Laratrust;

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
        if (Laratrust::hasRole('admin')) {
            return $this->adminDashboard();
        }

        if (Laratrust::hasRole('user')) {
            return $this->memberDashboard();
        }

        // if (auth()->user()->name !== 'admin') {
        //     return $this->memberDashboard();
        // }
    }

    protected function adminDashboard()
    {
        return view('home');
    }

    protected function memberDashboard()
    {
        return view('welcome');
    }
}
