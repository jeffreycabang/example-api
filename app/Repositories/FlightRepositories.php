<?php

namespace App\Repositories;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Images;
use Carbon\CarbonPeriod;

use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;

class FlightRepositories
{
	public function fetchCategories(){
		return Category::with('sub_categories')
            ->orderBy('category','DESC')
            ->get();
	}

	public function fetchCategoriesViaId($id){
		return Category::with('sub_categories')
            ->where('id', $id)
            ->first();
	}

	public function addCategories($data){

		return Category::create([
                'category' => $data['category'],
                'created_by' => $data['user_id']
            ]);
	}
}