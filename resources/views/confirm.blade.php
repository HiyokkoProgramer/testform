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
        <dt>企業名、団体名：</dt>
        <dd>
            {{$group}}
        </dd>
    </dl>
    <dl>
        <dt>お名前：</dt>
        <dd>
            {{$username}}
        </dd>
    </dl>

    <dl>
        <dt>年齢：</dt>
        <dd>
            {{$age}}歳
        </dd>
    </dl>

    <dl>
        <dt>電話番号：</dt>
        <dd>
            {{$tel}}
        </dd>
    </dl>
    <dl>
        <dt>Email：</dt>
        <dd>
            {{$mail}}
        </dd>
    </dl>

    <dl>
        <dt>お問い合わせ内容：</dt>
        <dd>
            {{$opinion}}
        </dd>

        <div><input type="submit" name="button2" value="送信" /></div>
    </form>
</body>
</html>