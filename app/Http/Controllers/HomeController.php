<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Shows the home page
     *
     * @return void
     */
    public function index()
    {
        $title = 'HOME';
        return view('home', ['title' => $title]);
    }

    /**
     * Shows the home page
     *
     * @return void
     */
    public function about()
    {
        $title = 'QUEM SOMOS';
        return view('home', ['title' => $title]);
    }

    /**
     * Shows the home page
     *
     * @return void
     */
    public function blog()
    {
        $title = 'BLOG';
        return view('home', ['title' => $title]);
    }

    /**
     * Shows the home page
     *
     * @return void
     */
    public function contact()
    {
        $title = 'CONTATO';
        return view('home', ['title' => $title]);
    }

    /**
     * Shows the home page
     *
     * @return void
     */
    public function dashboard()
    {
        return view('dashboard');
    }
}
