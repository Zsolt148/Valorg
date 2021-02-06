<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class newsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except('index_guest', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index_guest()
    {
        $news = News::orderBy('created_at', 'desc')->paginate(5);
        return view('news.index_guest', compact('news'));
    }

    public function index()
    {
        $news = News::all()->sortByDesc('created_at');
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files = Storage::disk('public')->files();

        return view('news.create', compact('files'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required|unique:news',
            'body' => 'required',
        ]);

        News::create([
            'user_id' => Auth::user()->id,
            'title' => $data['title'],
            'slug' => $data['slug'],
            'body' => $data['body'],
        ]);

        return redirect()->route('admin.news.index')->with('success', 'Sikeresen mentve');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $files = Storage::disk('public')->files();

        return view('news.edit', compact('news', 'files'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $data = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $news->update($data);

        return redirect()->route('admin.news.index')->with('success', 'Sikeresen frissítve');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')->with('success', 'Sikeresen törölve');
    }
}
