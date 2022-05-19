<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Webinar;

class DashboardController extends Controller
{
    public function index(Type $var = null)
    {
        return view('dashboard',[
            'artikels' => Artikel::paginate(3),
            'webinars' => Webinar::paginate(3),
        ]);
    }
}
