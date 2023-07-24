<?php

namespace App\Http\Controllers;

use App\Models\Weather;
use App\Models\Weather_date;
use Illuminate\Http\Request;

class WeatherController extends Controller
{
    public function index(Weather_date $weather_date)
    {
        return response()->json($weather_date::find(1)->cuaca);
    }
}
