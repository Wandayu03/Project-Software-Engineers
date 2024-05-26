<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function Fashion(){
        return view('FashionCategoryPage');
    }

    public function Furniture(){
        return view('FurnitureCategoryPage');
    }

    public function Plant(){
        return view('PlantCategoryPage');
    }

    public function Recycle(){
        return view('RecycleCategoryPage');
    }

    public function Free(){
        return view('FreeCategoryPage');
    }
}
