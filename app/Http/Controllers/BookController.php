<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        $data= Book::all();
        return view('admin.book.index',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Category::all();
        return view('admin.book.create ',[
            'data' => $data
        ]);
    }

  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $data = new Book();
        $data ->category_id = $request->category_id;
        $data ->user_id = 0; 
        $data ->title = $request->title;
        $data ->keywords = $request->keywords;
        $data ->description = $request->description;
        $data ->detail = $request->detail;
        $data ->novel = $request->novel;
        $data ->classic = $request->classic;
        $data ->psychology = $request->psychology;
        $data ->religion = $request->religion;
        $data ->college_preparatory_books = $request->college_preparatory_books;
        $data ->history = $request->history;
        $data ->story = $request->story;
        $data ->computer_science = $request->computer_science;
        $data ->personal_developments_books = $request->personal_developments_books;
        $data ->english = $request->english;
        $data ->cookbooks = $request->cookbooks;
        $data ->poem = $request->poem;
        $data ->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/book ');
  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book,$id)
    {
        $data= Book::find($id);
        return view('admin.book.show',[
            'data' => $data
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book,$id)
    {
        $data= Book::find($id);
        $datalist = Category::all();
        return view('admin.book.edit',[
            'data' => $data,
            'datalist' => $datalist
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book,$id)
    {
        $data= Book::find($id);
        $data ->category_id = $request->category_id;
        $data ->user_id = 0; 
        $data ->title = $request->title;
        $data ->keywords = $request->keywords;
        $data ->description = $request->description;
        $data ->detail = $request->detail;
        $data ->novel = $request->novel;
        $data ->classic = $request->classic;
        $data ->psychology = $request->psychology;
        $data ->religion = $request->religion;
        $data ->college_preparatory_books = $request->college_preparatory_books;
        $data ->history = $request->history;
        $data ->story = $request->story;
        $data ->computer_science = $request->computer_science;
        $data ->personal_developments_books = $request->personal_developments_books;
        $data ->english = $request->english;
        $data ->cookbooks = $request->cookbooks;
        $data ->poem = $request->poem;
        $data ->status = $request->status;
        if($request->file('image')){
            $data->image= $request->file('image')->store('images');
        }
        $data->save();
        return redirect('admin/book');
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function delete(Category $category,$id)
    {
        $data = Book::find($id);
        Storage::delete($data->image);
        $data->delete();
        return redirect('admin/book');
    }
}
