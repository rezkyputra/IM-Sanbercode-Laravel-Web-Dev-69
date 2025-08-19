<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BiodataController extends Controller
{
    public function formdaftar()
    {
        return view('page.daftar');
    }

    public function home(Request $request)
    {
        $fullname = $request->input("fullname");
        $age = $request->input("age");

        return view('page.home',['fullname' => $fullname, 'age' => $age]);
    }
}
