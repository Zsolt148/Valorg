<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('submit');
    }

    public function index() {
        $messages = Contacts::all();
        return view('contacts.index', compact('messages'));
    }

    public function destroy($id) {

        Contacts::findOrFail($id)->delete();

        return redirect()->route('admin.contacts.index')->with('success', 'Sikeresen törölve');
    }

    public function submit(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts',
            'body' => 'required',
        ]);

        Contacts::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'body' => $data['body'],
        ]);

        return response()->json(["error" => false, "msg" => "Elküldve"]);
    }
}
