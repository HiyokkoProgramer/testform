<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

    public function index(Request $request){
//        $data=['one','two','three','four','five'];
//
//            $data=[
//                ['name'=>'山田太郎','mail'=>'taro@yamada'],
//                ['name'=>'田中幸子','mail'=>'sachiko@tanaka'],
//                ['name'=>'鈴木一郎','mail'=>'ichiro@suzuki']
//            ];
        return view('hello.index');
    }

    public function post(Request $request){
        $name= $request->name;

        return view('hello.index',['name'=>$request->name]);
    }

}
