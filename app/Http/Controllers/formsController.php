<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class formsController extends Controller
{

    public function index()
    {
        $forms = Form::all()->sortByDesc('created_at');
        $files = Storage::disk('public')->files();

        return view('forms.index', compact('forms', 'files'));
    }

    public function index_guest() {
        $forms = Form::orderBy('created_at', 'desc')->paginate(10);


        return view('forms.index_guest', compact('forms'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'file' => 'required',
        ]);

        Form::create([
            'name' => $data['name'],
            'file' => $data['file'],
        ]);

        return redirect()->route('admin.forms.index')->with('success', 'Sikeresen mentve');
    }

    public function destroy($id)
    {
        Form::findOrFail($id)->delete();

        return redirect()->route('admin.forms.index')->with('success', 'Sikeresen törölve');
    }
}
