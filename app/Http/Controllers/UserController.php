<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        $data=Categorie::with('subcategories')->get()->toArray();
        echo "<pre>";
        print_r($data);
        echo "</pre>"; die;     
        return view('home', compact('data'));
    }
}
