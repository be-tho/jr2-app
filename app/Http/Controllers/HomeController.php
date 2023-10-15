<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cortes;

class HomeController extends Controller
{
    public function index()
    {
        $cortes = Cortes::all();
        return view('sections.home', ['cortes' => $cortes->sortByDesc('id')]);
    }
}
