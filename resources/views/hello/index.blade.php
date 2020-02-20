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
    {{--@if(count($errors) > 0)--}}
        {{--<div>--}}
            {{--<ul>--}}
                {{--@foreach($errors ->all() as $error)--}}
                    {{--<li>{{$error}}</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--</div>--}}
    {{--@endif--}}
    <table>
        <form action="/hello" method="post">
            {{csrf_field()}}
            @if($errors ->has('name'))
                <tr><th>ERROR:</th><td>{{$errors -> first('name')}}</td></tr>
            @endif
            <tr><th>name:</th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>

            @if($errors ->has('mail'))
                <tr><th>ERROR:</th><td>{{$errors -> first('mail')}}</td></tr>
            @endif
            <tr><th>mail:</th><td><input type="text" name="mail" value="{{old('mail')}}"></td></tr>

            @if($errors ->has('age'))
                <tr><th>ERROR:</th><td>{{$errors -> first('age')}}</td></tr>
            @endif
            <tr><th>age:</th><td><input type="text" name="age" value="{{old('age')}}"></td></tr>

            {{--@if($errors ->has('male'))--}}
                {{--<tr><th>ERROR:</th><td>{{$errors -> first('male')}}</td></tr>--}}
            {{--@elseif($errors ->has('female'))--}}
                {{--<tr><th>ERROR:</th><td>{{$errors -> first('female')}}</td></tr>--}}
            {{--@endif--}}
            {{--<tr><th>性別:</th>--}}
                {{--<td><p>男</p><input type="checkbox" name="male" value="{{old('male')}}"></td>--}}
                {{--<td><p>女</p><input type="checkbox" name="female" value="{{old('female')}}"></td>--}}
            {{--</tr>--}}

            @if($errors ->has('siteurl'))
                <tr><th>ERROR:</th><td>{{$errors -> first('siteurl')}}</td></tr>
            @endif
            <tr><th>siteurl:</th><td><input type="text" name="siteurl" value="{{old('siteurl')}}"></td></tr>

            @if($errors ->has('password'))
                <tr><th>ERROR:</th><td>{{$errors -> first('password')}}</td></tr>
            @endif
            <tr><th>password:</th><td><input type="password" name="password" value="{{old('password')}}"></td></tr>

            <tr></th><td><input type="submit" value="send"></td></tr>
        </form>
    </table>

@endsection

@section('footer')
    copyright 2020 toki
@endsection