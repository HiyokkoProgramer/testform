<html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <title>フォームのサンプル（入力画面）</title>
    <style>
        dl { width:430px; }
        dt { float:left; }
        dd { margin-left:130px; }
        .error{ color: red; }
    </style>
</head>
<body>

<h1>お問い合わせ確認画面</h1>
<form action="{{ url('form/complete') }}" method="post">
    @csrf
    <dl>
        <dd>企業名、団体名</dd>
        <dd>
            {{$group}}
        </dd>
    </dl>
    <dl>
        <dd>お名前</dd>
        <dd>
            {{$username}}
        </dd>
    </dl>

    <dl>
        <dd>年齢</dd>
        <dd>
            {{$age}}歳
        </dd>
    </dl>

    <dl>
        <dd>電話番号</dd>
        <dd>
            {{$tel}}
        </dd>
    </dl>
    <dl>
        <dd>Email</dd>
        <dd>
            {{$mail}}
        </dd>
    </dl>

    <dl>
        <dd>お問い合わせ内容</dd>
        <dd>
            {{$opinion}}
        </dd>
    </dl>
    <dl>
        <dd><input type="submit" name="button2" value="送信" /></dd>
    </dl>
</form>
</body>
</html>