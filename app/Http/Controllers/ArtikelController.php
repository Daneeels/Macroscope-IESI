<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Database\Eloquent;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('artikel.index', [
            'artikels' => Artikel::orderByDesc('created_at')->paginate(9),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $this->authorize('admin');
        return view('artikel.insert');
    }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    public function store(ArtikelRequest $request)
    {
        $this->authorize('admin');
        Artikel::create($request->all());
        return redirect('artikel')->with('success', 'Artikel berhasil terinput :D');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    public function show(Artikel $artikel)
    {
        return view('artikel.show', [
            'artikel' => $artikel,
        ]);
    }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    public function edit(Artikel $artikel)
    {
        $this->authorize('admin');
        return view('artikel.edit', [
            'artikel' => $artikel,
        ]);
    }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    public function update(ArtikelRequest $request, $id)
    {

        $this->authorize('admin');
        Artikel::find($id)->update([
            'title' => $request->title,
            'author' => $request->author,
            'content' => $request->content,
        ]);
        return back()->with('success', 'Artikel berhasil teredit :)');
    }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Artikel  $artikel
    //  * @return \Illuminate\Http\Response
    //  */
    public function destroy($id)
    {
        $this->authorize('admin');
        Artikel::find($id)->delete();
        return redirect('artikel');
    }
}
