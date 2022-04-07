<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Macbook;

class MacbookController extends Controller {
    public function getMacbooks() {
            $macbooks = DB::table('macbooks')->paginate(15);
            return view('macbook', ['macbooks' => $macbooks]);
            }
}
