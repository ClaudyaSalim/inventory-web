<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Stuff;

class CategoryController extends Controller
{
    public function addStuff(){
        $categories = Category::all();

        return view('add-stuff', ['categories' => $categories]);
    }

    public function viewCategory() {
        $categories = Category::all();

        return view('category', ['categories' => $categories]);
    }

    public function viewStuff($id){
        $category = Category::find($id);
        $stuffs = Stuff::where('category_id', $category->id)->get();

        return view('sub-category', ['stuffs' => $stuffs], ['category'=> $category]);
    }
}
