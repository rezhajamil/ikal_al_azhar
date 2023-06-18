<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::with(['author', 'comments', 'replies'])->orderBy('created_at', 'desc')->get();
        return view('dashboard.news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required'],
            'headline' => ['required', 'max:80'],
            'image' => ['required', 'image'],
            'caption' => ['required'],
        ]);

        if ($request->hasFile('image')) {
            $image = $request->image->store('news');

            News::create([
                'author_id' => auth()->user()->id,
                'title' => ucwords($request->title),
                'slug' => Str::slug($request->title),
                'headline' => $request->headline,
                'caption' => $request->caption,
                'image' => $image,
            ]);
        }

        return redirect()->route('admin.news.index')->with('success', 'Berhasil Menambahkan Berita');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('dashboard.news.show', compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('dashboard.news.edit', compact('news'));
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
        $request->validate([
            'title' => ['required'],
            'headline' => ['required', 'max:80'],
            'image' => ['nullable', 'image'],
            'caption' => ['required'],
        ]);

        if ($request->image && $request->hasFile('image')) {
            $image = $request->image->store('news');
            Storage::delete($news->image);

            $news->title = ucwords($request->title);
            $news->slug = Str::slug($request->title);
            $news->headline = $request->headline;
            $news->caption = $request->caption;
            $news->image = $image;
            $news->save();
        } else {
            $news->title = ucwords($request->title);
            $news->slug = Str::slug($request->title);
            $news->headline = $request->headline;
            $news->caption = $request->caption;
            $news->save();
        }

        return redirect()->route('admin.news.index')->with('success', 'Berhasil Mengedit Berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $gambar = $news->image;
        Storage::disk('public')->delete($gambar);
        $news->delete();

        return back()->with('success', 'Berhasil Menghapus Berita');
    }
}
