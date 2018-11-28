<?php

namespace App/Http/Controllers;

use App\Http\Controllers\Controller;
use Illuminate/Http/\Request;
Use Illuinate/Support/Facades/DB;

class TestController extends Controller
{
    public function test()
    {
        $drivers = DB::tabel('drivers')->get();
        //dd($drivers);


        return view('drivers',['drivers' => $drivers]);
    }
}
