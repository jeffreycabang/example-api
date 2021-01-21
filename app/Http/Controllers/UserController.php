<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Repositories\FlightRepositories as FlightRepositories;

class UserController extends Controller
{

    public function __construct(FlightRepositories $FlightRepositories)
    {
        $this->flight = $FlightRepositories;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $data = $this->flight->fetchCategories();

        return response()->json([
            'response'          => true,
            'data'              => $data
        ], 200);

        return view('admin.header', compact('variable','variable1','variable2','array','title','test'));

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

        return "This is a Form";
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

        // return $request;

        //execute add
        $data = $this->flight->addCategories($request->all());

        // return redirect('/user');

        return response()->json([
            'response'          => true,
            'data'              => $data
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        $data = $this->flight->fetchCategoriesViaId($id);

        return response()->json([
            'response'          => true,
            'data'              => $data
        ], 200);
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

        $data = $this->flight->fetchCategoriesViaId($id);

        return response()->json([
            'response'          => true,
            'message'          => "In a Form",
            'data'              => $data
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        //

        $data = $this->flight->fetchCategoriesViaId($id);

        $data->category = $request->get('category');
        $data->created_by = $request->get('user_id');

        $data->save();

        // $variable. ' AND '. $variable2;

        // return redirect('/user/'.$id.'/edit');

        return response()->json([
            'response'          => true,
            'data'              => $data
        ], 200);


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

        $category = $this->flight->fetchCategoriesViaId($id);

        if($category != ""):

            foreach($category->sub_categories as $result):
                $result->delete();
                // $result->forceDelete();
            endforeach;

            $category->delete();
            // $result->forceDelete();

        endif;

        return response()->json([
            'response'          => true,
            'data'              => $category
        ], 200);
    }
}
