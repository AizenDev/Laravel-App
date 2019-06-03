<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Brands;

class BrandsController extends Controller
{

    public function allBrands(){
        $brands = Brands::all();
        return response()->json($brands);
    }

    public function oneBrand($id){
        $brand = Brands::find($id);
        return response()->json($brand);
    }
}
