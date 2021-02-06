<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function cookie(Request $r) {
        if(Company::where('tax_id', $r->code)->exists()) {
            $cookie = cookie('confirmed', 'confirmed', 120);
            return redirect()->back()->withCookie($cookie);
        }else {
            return redirect()->back()->with('error', 'Nem található ilyen adóazonosító nállunk');
        }
    }
}
