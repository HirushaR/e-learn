<?php

namespace App\Http\Controllers;

use App\Point;
use Illuminate\Http\Request;

class PointController extends Controller
{
    public function allpoints()
    {
        $points=Point::orderBy('loop_points')->get();
        return view('ranks', compact($points));
    }
}
