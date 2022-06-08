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

        return redirect(route('home'));
    }

    public function editStuff($id) {
        $stuff = Stuff::find($id);

        return view ('edit-stuff', compact('stuff', 'id'));
    }

    public function updateStuff(Request $request, $id) {
        $stuff = Stuff::find($id);

        $stuff->name = $request->name;
        $stuff->qty = $request->qty;

        $stuff->save();

        return redirect (route('home'));
    }

    public function deleteStuff($id) {
        $stuff = Stuff::find($id);

        $stuff->delete();

        return redirect(route('home'));
    }
}
