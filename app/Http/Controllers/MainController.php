<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Train;

class MainController extends Controller
{

    public function index()
    {
        $departureDate = '2024-02-13';
        $trains = Train::whereDate('departure_time', '=', $departureDate)->get();

        return view('pages.index', compact('trains'));
    }
}