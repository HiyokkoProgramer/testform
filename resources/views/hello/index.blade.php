@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    {{--<p>ここが本文のコンテンツです。</p>--}}
    {{--<p>必要な分だけ記述できます。</p>--}}

    {{--//コンポーネントの表示--}}
    {{--@component('components.message')--}}
        {{--@slot('msg_title')--}}
            {{--CAUTION!--}}
        {{--@endslot--}}

        {{--@slot('msg_content')--}}
            {{--これはメッセージの表示です。--}}
        {{--@endslot--}}
    {{--@endcomponent--}}

    {{--//サブビュー--}}
    {{--@include('components.message',['msg_title' =>'OK','msg_content'=>'サブビューです'])--}}

    {{--//eachによる表示--}}
    {{--@each('components.item',$data,'item')--}}

    {{--//ビューコンポーザで表示--}}
    {{--<p>ViewComposer value <br>'View_message' = {{$view_message}}</p>--}}

    {{--//ミドルウェアによる表示--}}
    {{--<table>--}}
        {{--@foreach($data as $item)--}}
            {{--<tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>--}}
        {{--@endforeach--}}
    {{--</table>--}}

    {{--//レスポンスの操作--}}
    {{--<p>これは<middleware>google.com</middleware>へのリンクです。</p>--}}
    {{--<p>これは<middleware>yahoo.co.jp</middleware>へのリンクです。</p>--}}

    //バリデーション
    <p>{{$msg}}</p>
    @if(count($errors) > 0)
        <div>
            <ul>
                @foreach($errors ->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <table>
        <form action="/hello" method="post">
            {{csrf_field()}}
            <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>
            <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>
            <tr></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>

@endsection

@section('footer')
    copyright 2020 toki
@endsection