<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stuff;
use App\Models\Category;

class StuffController extends Controller
{
    //
    public function index(){
        $stuffs = Stuff::all();

        return view('index', ['stuffs' => $stuffs]);
    }

    public function createStuff(Request $request){
        Stuff::create([
            'category_id' => $request->category,
            'name' => $request->name,
            'qty' => $request->qty,
        ]);

        return redirect(route('home'));
    }

    public function editStuff($id) {
        $stuff = Stuff::find($id);
        $categories = Category::all();

        return view ('edit-stuff', compact('stuff', 'id', 'categories'));
    }

    public function updateStuff(Request $request, $id) {
        $stuff = Stuff::find($id);

        $stuff->name = $request->name;
        $stuff->qty = $request->qty;
        $stuff->category_id = $request->category;

        $stuff->save();

        return redirect (route('home'));
    }

    public function deleteStuff($id) {
        $stuff = Stuff::find($id);

        $stuff->delete();

        return redirect(route('home'));
    }
}
