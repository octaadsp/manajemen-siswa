<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //homepage
    public function homepage()
    {
        return view('pages.homepage');
    }

    //about
    public function about()
    {
        $halaman='about';
        return view('pages.about', compact('halaman'));
    }
}