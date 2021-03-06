<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }
    public function setting(){
        $data= Setting::first();
        if($data==null){
            $data= new Setting();
            $data->title="Project Title";
            $data->save();
            $data=Setting::first();
        }
        return view("admin.setting",['data'=>$data]);
    }
    public function settingUpdate(Request $request){
        echo "Settings";
    }
}
