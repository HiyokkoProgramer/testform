<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

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
        return view('hello.index',['msg'=>'フォームを入力']);
    }

    public function post(Request $request){

//        $validate_rule =[
//            'name' =>'required',
//            'mail'=>'email',
//            'age' =>'numeric | between:0,150',
//            'male'=>'accept',
//            'female'=>'accept',
//            'siteurl'=>'url',
//            'password'=>'alpha-dash |alpha-num',
//        ];
//        $this->validate($request,$validate_rule);
//        $name= $request->name;

            $validator =Validator::make($request->all(),[
                'name' =>'required',
                'mail'=>'email',
                'age' =>'numeric | between:0,150',
            ]);

            if($validator->fails()){
                return redirect('/hello')
                    ->withErrors($validator)
                    ->withInput();
            }

        return view('hello.index',['msg'=>'正しく入力されました！']);
    }

}
