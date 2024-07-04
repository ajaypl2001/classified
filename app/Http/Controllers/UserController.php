<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $data=Categorie::all()->toArray();
        return view('home', compact('data'));
    }
}
