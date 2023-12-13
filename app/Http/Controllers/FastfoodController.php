<?php

namespace App\Http\Controllers;

use App\Models\Fastfood;
use Illuminate\Http\Request;

class FastfoodController extends Controller
{
    function viewcreateFastfood(){
        return view('/createFastfood');
    }

    function createFastfood1(Request $request){

        $filename = $request->file('Image')->getClientOriginalName();
        $request->file('Image')->storeAs('/public'.'/'.$filename);

        Fastfood::create([
            'Menu' => $request->Menu,
            'Size' => $request->Size,
            'Harga'=> $request->Harga,
            'Image' => $filename
        ]);

        return redirect('/read-fastfood');
    }

    function readfastfood(){
        $fastfoods = Fastfood::all();
        return view('readfastfood', ['fastfoods' => $fastfoods] );
    }
}
