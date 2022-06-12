<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messageList=Message::all();
        return view('admin.messages.index',['messageList'=>$messageList]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= new Message;
        $data->ip=request()->ip();
        $data->subject=$request->subject;
        $data->message=$request->message;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->phone=$request->phone;
        $data->status='True';
        $data->save();
        return redirect()->back();
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message,$id)
    {
        $message=Message::find($id);
        return view('admin.messages.edit',['message'=>$message]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Message $message,$id)
    {
        $message=Message::find($id);
        $message->status=$request->status;
        $message->save();
        return redirect()->route('admin.messages.index')->with('success',"Başarıyla güncelelndi!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message,$id)
    {
        $message=Message::find($id);
        $message->delete();
        return redirect()->route('admin.messages.index')->with('success',"Başarıyla Silindi!");

    }
}
