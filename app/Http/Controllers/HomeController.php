<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class HomeController extends Controller
{
    //
    public function index(){
        $sliderdata = Book::limit(5)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata 
        ]);
    }
    public function about_us(){
        return view('home.about');
    }

    public function test($id,$name){
        return view('home.test',['id'=>$id,'name'=>$name]);
        /*
        echo "ID number:",$id;
        echo "<br>Name:",$name;
        for($i=0;$i<=$id;$i++){
            echo "<br> $i - $name";
        }
*/

    }
}
