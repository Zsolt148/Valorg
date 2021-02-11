<?php

namespace App\Http\Controllers;

use App\Mail\contactsMail;
use App\Models\Contacts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class contactsController extends Controller
{

    public function submit(Request $request) {

        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        dispatch(function () use ($data) {
            Mail::to('valorg2019@gmail.com')->queue(new contactsMail($data));
        });

        return response()->json(["error" => false, "msg" => "Elküldve"]);
    }

}
