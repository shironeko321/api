<?php

namespace App\Http\Controllers;

use App\Models\SeaTides;
use Illuminate\Http\Request;

class SeaTidesController extends Controller
{
    public function index(SeaTides $seaTides)
    {
        return response()->json($seaTides::all());
    }
}
