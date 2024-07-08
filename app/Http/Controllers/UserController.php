<?php

namespace App\Http\Controllers;
use App\Models\Subcategory;
use App\Models\International_category;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home()
    {
        // $result=Category::with('subcategories')->get()->toArray();
            
        $data = DB::table('categories')
            ->leftJoin('subcategories', 'categories.CateId', '=', 'subcategories.CateId')
            ->select('categories.CateId as category_id', 'categories.CateName', 'categories.CateNameAmahric', 'categories.CateIcon', 'categories.CateImage', 'categories.CateDate', 'categories.CateModify', 'categories.CateStatus', 'subcategories.ScateName')
            ->get()
            ->groupBy('category_id');
        $result = [];
        foreach ($data as $category_id => $items) {
            $category = $items->first();
            $subcategories = $items->pluck('ScateName')->filter()->all();

            $result[] = [
                'category_id' => $category_id,
                'CateName' => $category->CateName,
                'CateNameAmahric' => $category->CateNameAmahric,
                'CateIcon' => $category->CateIcon,
                'CateImage' => $category->CateImage,
                'CateDate' => $category->CateDate,
                'CateModify' => $category->CateModify,
                'CateStatus' => $category->CateStatus,
                'subcategories' => $subcategories,
            ];
        }
        $internation_cat=International_category::all()->toArray();
        // echo "<pre>";
        // print_r($nternation_cat);
        // echo "</pre>"; die;

        // $internation_cat=DB::table('international_category')->get()->toArray();
      
        return view('home', compact('result', 'internation_cat'));
    }
}