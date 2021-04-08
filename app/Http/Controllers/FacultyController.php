<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FacultyModel;

class FacultyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     $getName=request("fname");
     $getDes=request("fdes");
     $getcollege=request("fcoll");
     $getcontact=request("fcont");

     echo $getName;
     echo "<br>";
     echo $getDes;
     echo "<br>";
     echo $getcollege;
     echo "<br>";
     echo $getcontact;
     echo "<br>";


     $faculty=new FacultyModel();

     $faculty->fname=$getName;
     $faculty->fdesignation=$getDes;
     $faculty->fcollege=$getcollege;
     $faculty->fcontact=$getcontact;

    
     $faculty->save();

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
