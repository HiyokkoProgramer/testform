<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>フォームのサンプル（入力画面）</title>
    <style>
        dl { width:430px; }
        dt { float:left; }
        dd { margin-left:130px; }
        red { color: red; }
    </style>
</head>
<body>

<h1>お問い合わせ入力画面</h1>

<form action="{{ url('form/confirm') }}" method="post">
    @csrf

    <dl>
        <dd>企業名、団体名</dd>
        <dd><input type="text" name="group" value="{{ old('group') }}"></dd>
        <red>@if($errors->has('group')) <span class="text-danger">{{ $errors->first('group') }}</span> @endif</red>
    </dl>
    <dl>
        <dd>お名前</dd>
        <dd><input type="text" name="username" value="{{ old('username') }}"></dd>
        <red>@if($errors->has('username')) <span class="text-danger">{{ $errors->first('username') }}</span> @endif</red>
    </dl>

    <dl>
        <dd>年齢</dd>
        <dd><input type="text" name="age" value="{{ old('age') }}">歳</dd>
        <red>@if($errors->has('age')) <span class="text-danger">{{ $errors->first('age') }}</span> @endif</red>
    </dl>

    <dl>
        <dd>電話番号</dd>
        <dd><input type="text" name="tel" value="{{ old('tel') }}"></dd>
        <red>@if($errors->has('tel')) <span class="text-danger">{{ $errors->first('tel') }}</span> @endif</red>
    </dl>
    <dl>
        <dd>Email</dd>
        <dd><input type="text" name="mail" value="{{ old('mail') }}"></dd>
        <red>@if($errors->has('mail')) <span class="text-danger">{{ $errors->first('mail') }}</span> @endif</red>
    </dl>

    <dl>
        <dd>お問い合わせ内容</dd>
        <dd><textarea name="opinion" rows="8" cols="40" value="{{ old('opinion') }}"></textarea></dd>
        <red>@if($errors->has('opinion')) <span class="text-danger">{{ $errors->opinion }}</span> @endif</red>
    </dl>
    <dl>
        <dd><input type="submit" name="button1" value="送信" /></dd>
    </dl>
</form>
</body>
</html>