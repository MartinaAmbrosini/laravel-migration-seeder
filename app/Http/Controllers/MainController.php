<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Trains;

class MainController extends Controller
{

    public function index()
    {

        $trains = Trains::all();

        return view('pages.index', compact('trains'));
    }
}