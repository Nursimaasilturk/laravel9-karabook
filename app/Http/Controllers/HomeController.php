<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Setting;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
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
         $comments=Comment::where('book_id',$id)->get();
        return view('home.book',[
            'data'=>$data,
            'relbook'=>$relbook,
            'commentList'=>$comments
        ]);
    }
    public function category_book($id){
        $bookList=Book::where("category_id",$id)->get();
        if(!count($bookList)==0){
            return view('home.categorybook',[
                'bookList'=>$bookList,
            ]);
        }else{
            return redirect()->back();
        }
        
    }
   
    ##PAGES
    public function about_us(){
        $data=Setting::first()->aboutus;
        return view('home.pages.aboutus',['data'=>$data]);
    }
    public function contact_us(){
        $data=Setting::first()->contact;
        return view('home.pages.contactus',['data'=>$data]);
    }
    public function references(){
        $data=Setting::first()->references;
        return view('home.pages.references',['data'=>$data]);
    }

    public function storecomment(Request $request){
        $comment=new Comment;
        $comment->user_id=Auth::id(); 
        $comment->book_id=$request->book_id;
        $comment->subject=$request->subject;
        $comment->comment=$request->comment;
        $comment->rate=$request->rate;
        $comment->ip=request()->ip();
        $comment->status=1;
        $comment->save();
        return redirect()->route('book',['id'=>$comment->book_id])->with('success','Successfully commended out!');

    }

    ##logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('home');
    }


    public function signup(){
        return view('home.user.customregister');
    }

    public function user_profile(){
        return view('home.user.profile');
    }
} 
