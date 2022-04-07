<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Ipad;

class IpadController extends Controller {
     public function getIpads() {
        $ipads = DB::table('ipads')->paginate(15);
        return view('ipad', ['ipads' => $ipads]); //(файл, название для...)
        }
}
