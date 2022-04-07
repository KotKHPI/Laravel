<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Airpods;

class AirpodsController extends Controller {
    public function getAirpods() {
        $airpods = DB::table('airpods')->paginate(15);
        return view('airpods', ['airpods' => $airpods]);
        }
}
