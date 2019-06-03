<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategotiesController extends Controller
{
    public function allCategories(){
        $categories = Categories::all();
        return response()->json($categories);
    }

    public function oneCategory($id){
        $category = Categories::find($id);
        return response()->json($category);
    }
}
