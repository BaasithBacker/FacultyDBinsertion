<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BookModel;

class BookController extends Controller
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
       return view('book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gettitle=request("btitle");
        $getauthor=request("bauth");
        $getdesc=request("bdes");
        $getdistr=request("bdis");
        $getprice=request("bprice");

        echo $gettitle;
        echo '<br>';
        echo  $getauthor;
        echo '<br>';
        echo $getdesc;
        echo '<br>';
        echo $getdistr;
        echo '<br>';
        echo  $getprice;
        echo '<br>';

        $book=new Bookmodel();

        $book->title=$gettitle;
        $book->author=$getauthor;
        $book->description=$getdesc;
        $book->distribution=$getdistr;
        $book->price=$getprice;
        

        $book->save();
        
        
           
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
