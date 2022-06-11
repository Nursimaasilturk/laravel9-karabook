<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    public static function categoryList()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function index(){
        $sliderdata = Book::limit(5)->get();
        $booklist1 = Book::limit(6)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'booklist1'=>$booklist1  
        ]);
    }
    public function book($id){
        
        $data=Book::find($id);
        $relbook=Book::where("category_id",$data->category_id)
        ->where('id','!=',$id)
         ->get();
        return view('home.book',[
            'data'=>$data,
            'relbook'=>$relbook
        ]);
    }
    public function category_book($id){
        $omer=Book::where("category_id",$id)->get();
        return view('home.categorybook',[
            'omer'=>$omer
        ]);
    }
   

} 
