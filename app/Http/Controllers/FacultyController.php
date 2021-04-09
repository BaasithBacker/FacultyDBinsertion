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
        $faculty=FacultyModel::all();
        return view('facultyview',compact('faculty'));
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



    public function search(Request $request)
    {
        $getname=request("fname");
        
        $faculty=FacultyModel::query()
        ->where('fname','LIKE',"%{$getname}%")
        ->get();
        return view('facultyview',compact('faculty'));
    }



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
        $faculty=FacultyModel::find($id);
        return view('facultyedit',compact('faculty'));
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
        $faculty=FacultyModel::find($id);

        $getName=request("fname");
        $getDes=request("fdes");
        $getcollege=request("fcoll");
        $getcontact=request("fcont");
   
        $faculty->fname=$getName;
        $faculty->fdesignation=$getDes;
        $faculty->fcollege=$getcollege;
        $faculty->fcontact=$getcontact;
   
       
        $faculty->save();

        return redirect('/facultyview');
   
     
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
