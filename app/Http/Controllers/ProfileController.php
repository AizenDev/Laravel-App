<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User;
use App\Http\Controllers\Auth;
use App\Adress;



class ProfileController extends Controller
{
    public function updateEmail(Request $req){
        $data = User::find(auth()->user()->id);
        $data->email = $req->email;
        $data->save();
        return redirect('/profile')->with('success', 'Info Updated');;
    }
    public function updatePhone(Request $req){
        $data = User::find(auth()->user()->id);
        $data->phone = $req->phone;
        $data->save();
        return redirect('/profile')->with('success', 'Info Updated');;
    }
    public function updateAdress(Request $req){
        $data = Adress::find(auth()->user()->id);

        if($req->country === ""){
            $data->country = $data->country;
        } else {
            $data->country = $req->country;
        }

        if($req->city === ""){
            $data->city = $data->city;
        } else {
            $data->city = $req->city;
        }

        if($req->street === ""){
            $data->street = $data->street;
        } else {
            $data->street = $req->street;
        }

        if($req->house === ""){
            $data->house = $data->house;
        } else {
            $data->house = $req->house;
        }

        if($req->flat === ""){
            $data->flat = $data->flat;
        } else {
            $data->flat = $req->flat;
        }

        $data->save();
        
        return redirect('/profile')->with('success', 'Info Updated');;
    }

    public function updateName(Request $req){
        $data = User::find(auth()->user()->id);

            $data->name = $req->name;


            $data->lastname = $req->lastname;


            $data->patronymic = $req->patronymic;

        
        $data->save();
        
        return redirect('/profile')->with('success', 'Info Updated');
    }
}
