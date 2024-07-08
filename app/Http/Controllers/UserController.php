<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Image;
use App\Models\Post_add;
use App\Models\Sliderimage;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function home()
    {
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

        $add_images=Post_add::with('images')->get()->toArray();
        $social_icon=DB::table('social_icon')->get()->toArray();
        $slider_img=Sliderimage::all()->toArray();
        $internation_cat=DB::table('international_category')->get()->toArray();
      
        return view('home', compact('result', 'internation_cat', 'add_images', 'social_icon', 'slider_img'));
    }

    public function blogs(){
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
        $social_icon=DB::table('social_icon')->get()->toArray();
        $slider_img=Sliderimage::all()->toArray();
        return view('blog', compact('result', 'slider_img', 'social_icon'));
    }
}   