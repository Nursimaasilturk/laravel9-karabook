<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view('home.index');
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
