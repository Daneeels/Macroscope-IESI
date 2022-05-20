<?php

namespace App\Http\Controllers;

use App\Models\Webinar;
use Illuminate\Http\Request;
use App\Http\Requests\WebinarRequest;

class WebinarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('webinar.index', [
            'webinars' => Webinar::paginate(6),
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
        return view('webinar.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(WebinarRequest $request)
    {
        $this->authorize('admin');
        Webinar::create($request->all());
        return redirect('webinar')->with('success', 'Webinar berhasil terinput :D');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    // public function show(Webinar $webinar)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function edit(Webinar $webinar)
    {
        $this->authorize('admin');
        return view('webinar.edit', [
            'webinar' => $webinar,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function update(WebinarRequest $request, $id)
    {
        $this->authorize('admin');
        Webinar::find($id)->update([
            'title' => $request->title,
            'speaker' => $request->speaker,
            'link' => $request->link,
            'date' => $request->date,
        ]);
        return back()->with('success', 'Webinar berhasil teredit :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Webinar  $webinar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->authorize('admin');
        Webinar::find($id)->delete();
        return redirect('webinar');
    }
}
