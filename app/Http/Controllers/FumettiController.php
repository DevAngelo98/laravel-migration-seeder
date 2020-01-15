<?php

namespace App\Http\Controllers;
use App\Fumetti;
use Illuminate\Http\Request;

class FumettiController extends Controller
{
    public function index()
    {
        $fumetti = Fumetti::all();
        return view('fumetti', compact('fumetti'));
    }
}
