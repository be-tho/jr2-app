<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Cortes;

class HomeController extends Controller
{
    public function index()
    {
        $cortes = Cortes::orderBy('id', 'desc')->paginate(6);

        return view('sections.home', ['cortes' => $cortes]);
    }
}
