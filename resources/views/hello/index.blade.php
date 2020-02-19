@extends('layouts.helloapp')

@section('title','Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要な分だけ記述できます。</p>

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

    //レスポンスの操作
    <p>これは<middleware>google.com</middleware>へのリンクです。</p>
    <p>これは<middleware>yahoo.co.jp</middleware>へのリンクです。</p>

@endsection

@section('footer')
    copyright 2020 toki
@endsection