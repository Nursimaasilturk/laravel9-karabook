<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $faqList=Faq::all();
        return view('admin.faq.index',['faqList'=>$faqList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=new Faq;
        $data->question=$request->question;
        $data->answer=$request->answer;
        $data->status=$request->status;
        $data->save();
        return redirect(route('admin.faq.index'))->with('success','Created Gracefully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function show(Faq $faq)
    {
       $faqList=Faq::all();
       return view('home.pages.faq',['faqList'=>$faqList]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function edit(Faq $faq,$id)
    {
        $faq=Faq::find($id);
        return view('admin.faq.edit',['faq'=>$faq]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Faq $faq,$id)
    {
        $faq=Faq::find($id);
        $faq->question=$request->question;
        $faq->answer=$request->answer;
        $faq->status=$request->status;
        $faq->save();
        return redirect()->route('admin.faq.index')->with('success',"Başarıyla güncellendi hocam!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Faq  $faq
     * @return \Illuminate\Http\Response
     */
    public function destroy(Faq $faq,$id)
    {
        $data=Faq::find($id);
        $data->delete();
        return redirect(route('admin.faq.index'))->with('success','Deleted Gracefully!');

    }
}
