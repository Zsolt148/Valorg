<?php

namespace App\Http\Controllers;

use App\Models\Links;
use Illuminate\Http\Request;

class LinksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $links = Links::all();
        return view('links.index', compact('links'));
    }

    public function create() {
        //
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required',
            'url' => 'required',
        ]);

        Links::create($data);

        return redirect()->route('admin.links.index')->with('success', 'Sikeresen létrehozva');
    }

    public function destroy($id) {
        $link = Links::findOrFail($id);

        $link->delete();

        return redirect()->route('admin.links.index')->with('success', 'Sikeresen törölve');
    }
}
