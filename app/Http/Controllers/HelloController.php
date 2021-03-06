<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;
use Illuminate\Support\Facades\DB;

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

//        if(isset($request->id)){
//            $param = ['id' => $request->id];
//            $items=DB::select('select * from people where id =:id',$param);
//        }else{
//            $items=DB::select('select * from people');
//        }

        $items = DB::table('people')->get();

        return view('hello.index',['items'=>$items]);
    }

    public function show(Request $request){
        $id = $request->id;
        $item =DB::table('people')->where('id',$id)->first();

        return view('hello.show',['item' =>$item]);
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

    //DB::insertによるレコード追加
    public function add(Request $request){
        return view('hello.add');
    }

    public function create(Request $request){
        $param = [
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::insert('insert into people (name,mail,age) values (:name, :mail, :age)',$param);
        return redirect('/hello');
    }

    //DB::updateによるレコード更新
    public function edit(Request $request){
        $param = ['id' => $request->id];
        $item=DB::select('select * from people where id =:id',$param);

        return view('hello.edit',['form'=>$item[0]]);
    }

    public function update(Request $request){
        $param = [
            'id' => $request->id,
            'name' => $request->name,
            'mail' => $request->mail,
            'age' => $request->age,
        ];

        DB::update('update people set name=:name,mail=:mail,age=:age where id =:id',$param);
        return redirect('/hello');
    }

    public function delete(Request $request){
        $param = ['id' => $request->id];
        $item=DB::select('select * from people where id =:id',$param);

        return view('hello.del',['form'=>$item[0]]);
    }

    public function remove(Request $request){
        $param = ['id' => $request->id];
        DB::delete('delete from people where id =:id',$param);

        return redirect('/hello');
    }



}
