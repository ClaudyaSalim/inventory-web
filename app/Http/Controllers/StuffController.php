<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stuff;

class StuffController extends Controller
{
    //
    public function index(){
        $stuffs = Stuff::all();

        return view('index', ['stuffs' => $stuffs]);
    }

    public function createStuff(Request $request){
        Stuff::create([
            'name' => $request->name,
            'qty' => $request->qty,
        ]);

        return redirect('/');
    }
}
