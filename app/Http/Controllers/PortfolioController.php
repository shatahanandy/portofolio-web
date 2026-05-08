<?php

namespace App\Http\Controllers;

class PortfolioController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function unggah()
    {
        return view('unggah');
    }

    public function statistik()
    {
        return view('statistik');
    }

    public function contact()
    {
        return view('contact');
    }
}