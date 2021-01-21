<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        // return Category::where('id', 1)
        //     ->where('created_by', 1)
        //     ->get();

        // Category::where('id', 100)
        //     ->orWhere('created_by', 1)
        //     ->get();

        // $array = array(1,2);

        $query = Category::with('sub_categories')
            ->whereIn('id', [1,2])
            ->get();

        $query1 = SubCategory::get();

        $new_query = $query->where('id', 2);

        for($x=0; $x<count($query); $x++):
            $query[$x];
        endfor;

        foreach($query1 as $result):
            $result->category;
        endforeach;

        // return "I am Index";

        // return User::get();

        // return DB::select("
        //     SELECT * FROM ref_category
        //         WHERE id IN (SELECT category_id FROM tbl_news)
        // ");

        // $test = DB::select("
        //     SELECT * FROM ref_category
        //         WHERE id = 100 OR created_by = 1
        // ");

        // $test = DB::select("
        //     SELECT * FROM ref_category
        //         WHERE id = 100 OR created_by = 1
        //         ORDER BY category
        // ");

        // $test = DB::select("
        //     SELECT 

        //     id, title, category_id 

        //     FROM tbl_news

        // ");

        // return json_encode(DB::table('users')->first());

        // $test = DB::select("
        //     SELECT * FROM 
        //         tbl_news 
        //     LEFT JOIN 
        //         ref_category 
        //     ON tbl_news.category_id = ref_category.id

        // ");

        // return $test = DB::select("
        //     SELECT * FROM 
        //             (SELECT id, category_id, title FROM tbl_news) as a
        //     LEFT JOIN 
        //             (SELECT id as jeffrey, category FROM ref_category) as b
        //     ON a.category_id = b.jeffrey

        // ");

        foreach($test as $result):
            // return json_encode($result);

        endforeach;

        $variable = 123;
        $variable1 = 123;
        $variable2 = 123;

        $array = array(1,2,3,4,5);

        if($variable == "Test"){

        }elseif($variable == "Test1") {

        }else{

        }

        for($x = 1; $x < 5; $x++){
            $x;
        }

        for($x = 1; $x < 5; $x++):

            $x;

        endfor;

        if($variable == "Test"):

        elseif($variable == "Test1"):

        else:
            
        endif;

        $title = "Test title | Admin";

        return view('admin.header', compact('variable','variable1','variable2','array','title','test'));

        // return view('welcome', compact('header'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //add form
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        //execute add
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, Request $request)
    {
        //

        return $id;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
