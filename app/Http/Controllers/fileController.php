<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class fileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('download');
    }

    public function download($name) {
        return Storage::disk('public')->download($name);
    }

    public function index() {
        $files = Storage::disk('public')->files();

        return view('files.index', compact('files'));
    }

    public function create() {
        return view('files.create');
    }

    public function store(Request $request) {

        if($request->file('files')) {
            foreach($request->file('files') as $key => $file) {
                $name = str_replace(" ", "_", $file->getClientOriginalName());
                Storage::disk('public')->put($name, file_get_contents($file));
            }
        }

        return redirect()->route('admin.files.index');
    }

    public function destroy($name) {
        Storage::disk('public')->delete($name);

        return redirect()->route('admin.files.index')->with('success', 'Sikeresen törölve');
    }
}
