<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Http\Request;
use App\Adress;
use App\TypeOfProd;
use App\Categories;
use App\Brands;
use App\Orders;


class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function addToCart(Request $request){
        $neworder = Orders::create([
            "user_id" => auth()->user()->id,
            "prod_id" => $request->item_id,
            "type_id" => $request->cat_id,
            "prod_name" => $request->prod_name,
            "price" => $request->price
        ]);

        return redirect('/profile')->with('Заказ оформлен, ждите звонка');
    }


    public function singlePage($id, $tovar){

        switch($id){
            case 1:
                $tshirts = DB::select('select * from tshirts where id = :id', ['id' => $tovar]);
                $brand = Brands::where('id', isset($tshirts['brand_id']));
                return view('pages.single', ['tshirts' => $tshirts, 'brand' => $brand]);
            case 2:
                $shorts = DB::select('select * from shorts where id = :id', ['id' => $tovar]);
                return view('pages.single', ['shorts' => $shorts]);
            case 3:
                $boots = DB::select('select * from boots where id = :id', ['id' => $tovar]);
                return view('pages.single', ['boots' => $boots]);
            case 4:
                $balls = DB::select('select * from balls where id = :id', ['id' => $tovar]);
                return view('pages.single', $balls);
            case 5:
                $gaiters = DB::select('select * from gaiters where id = :id', ['id' => $tovar]);
                return view('pages.single', ['gaiters' => $gaiters]);
            case 6:
                $gloves = DB::select('select * from gloves where id = :id', ['id' => $tovar]);
                return view('pages.single', ['gloves' => $gloves]);
            case 7:
                $hoodies = DB::select('select * from hoodies where id = :id', ['id' => $tovar]);
                return view('pages.single', ['hoodies' => $hoodies]);
            default:
                return view('pages.cart');
        }
    }


    /*public function findProd(Request $req){
        $result = DB::select('SELECT * FROM (
            SELECT * FROM tshirts UNION ALL
            SELECT * FROM shorts UNION ALL
            SELECT * FROM boots UNION ALL
            SELECT * FROM balls UNION ALL
            SELECT * FROM gaiters UNION ALL
            SELECT * FROM gloves UNION ALL
            SELECT * FROM hoodies
        ) a WHERE a.model = :mod', ['mod' => $req->find]);
        return view('pages.search', ['result' => $result]);
    }*/

    public function products(Request $req, $id){

        switch($id){
            case 1:
                $tshirts = DB::select('select * from tshirts');
                return view('pages.list')->with('tshirts',$tshirts);
            case 2:
            
                $shorts = DB::select('select * from shorts');
                return view('pages.list', ['shorts' => $shorts]);
            case 3:
                $boots = DB::select('select * from boots');
                return view('pages.list', ['boots' => $boots]);
            case 4:
                $balls = DB::select('select * from balls');
                return view('pages.list', ['balls' => $balls]);
            case 5:
                $gaiters = DB::select('select * from gaiters');
                return view('pages.list', ['gaiters' => $gaiters]);
            case 6:
                $gloves = DB::select('select * from gloves');
                return view('pages.list', ['gloves' => $gloves]);
            case 7:
                $hoodies = DB::select('select * from hoodies');
                return view('pages.list', ['hoodies' => $hoodies]);
            default:
                return view('pages.cart');
        }

    }

    public function delProduct(Request $request){
        if($request->cat_id == 1){
            $result = DB::delete('delete from tshirts where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 2){
            $result = DB::delete('delete from shorts where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 3){
            $result = DB::delete('delete from boots where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 4){
            $result = DB::delete('delete from balls where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 5){
            $result = DB::delete('delete from gaiters where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 6){
            $result = DB::delete('delete from gloves where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } elseif($request->cat_id == 7){
            $result = DB::delete('delete from hoodies where id = ?', [$request->prod_id]);
            return redirect()->route('products', ['id' => $request->cat_id])->with('success', 'Товар удалён');
        } else {
            return view('pages.list')->with('error', 'Something wrong ');
        }
    }

    public function cart(){
        return view('pages.cart');
    }

    public function delOrder(Request $request){
        $ord = DB::delete('delete from orders where id = :id', ['id' => $request->ord_id]);
        return view('pages.index')->with('success', 'Заказ удалён');
    }

    public function profile(){
        $orders = DB::select('select * from orders where user_id = :user_id', ['user_id' => auth()->user()->id]);
        $adress = Adress::find(auth()->user()->id);
        return view('pages.profile', compact('orders', 'adress'));
    }

    public function admin(){
        $orders = Orders::all();
        $categ = Categories::all();
        $types = TypeOfProd::all();
        $brands = Brands::all();
        $users = User::all();
        return view('pages.admin', compact('users','types','categ','brands','orders'));
    }

    public function addProduct(Request $request){

        /*$request->validate([
            'title' => 'required|unique:posts|max:255',
            'body' => 'required',
            'publish_at' => 'nullable|date',
        ]);*/

        if($request->material && $request->ptype == 4){
            $res = DB::insert('insert into balls (brand_id, category_id, color, price, size, model, club, material, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->material, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен');
        } elseif($request->coating && $request->ptype == 3){
            $res = DB::insert('insert into boots (brand_id, category_id, color, price, size, model, club, img, covering, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->img, $request->coating, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен');   
        } elseif($request->protect && $request->ptype == 6){
            $res = DB::insert('insert into gloves (brand_id, category_id, color, price, size, model, club, protect, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->protect, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен');         
        } elseif($request->ptype == 1){
            $res = DB::insert('insert into tshirts (brand_id, category_id, color, price, size, model, club, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен');  
        } elseif($request->ptype == 2){
            $res = DB::insert('insert into shorts (brand_id, category_id, color, price, size, model, club, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен');  
        } elseif($request->ptype == 5){
            $res = DB::insert('insert into gaiters (brand_id, category_id, color, price, size, model, club, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен'); 
        } elseif($request->ptype == 7){
            $res = DB::insert('insert into hoodies (brand_id, category_id, color, price, size, model, club, img, description) values (?, ?, ?, ?, ?, ?, ?, ?, ?)', 
            [$request->categ, $request->ptype, $request->color, $request->price, $request->size, $request->model, $request->club, $request->img, $request->description]);
            return redirect('/admin')->with('success', 'Товар добавлен'); 
        } else {
            return redirect('/admin')->with('error', 'Something wrong'); 
        };

    }
}

