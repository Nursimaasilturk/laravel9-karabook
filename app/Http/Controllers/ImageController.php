<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Image;



class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($bid)
    {
        $book= Book::find($bid);
        //$images= Image::where('book_id',$bid);
        $images= DB::table('images')->where('book_id',$bid)->get();
        return view('admin.image.index',[
            'book'=> $book,
            'images'=>$images
        ]);
    }

    /**
     
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$bid)
    {
        $data = new Image();
        $data ->book_id = $bid;
        $data ->title = $request->title;
        if ($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect()->route('admin.image.index',['bid'=>$bid]);
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
    public function update(Request $request, $id,$bid)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($bid,$id)
    {
        $data = Image::find($id);
        if($data->image && Storage::disk('public')->exists($data->image))
        {
        Storage::delete($data->image);
        }
        $data->delete();
        return redirect()->route('admin.image.index',['bid'=>$bid]);
    }
}
