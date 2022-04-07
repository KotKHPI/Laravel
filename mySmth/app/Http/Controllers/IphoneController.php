<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Iphone;

class IphoneController extends Controller {
    public function getIphones() {
    $iphones = DB::table('iphones')->paginate(15);
    return view('iphone', ['iphones' => $iphones]); //(файл, название для...)
    }

}
