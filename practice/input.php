<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>入力画面</title>
</head>

<body>
    <h1>ユーザー登録（1/3）入力</h1>
    <form action="comfirm.php" method="post">
        <p>
            <label for="username">お名前：</label>
            <input type="text" name="name">
        </p>
        <p>
            <label for="email">メールアドレス：</label>
            <input type="text" name="email">
        <p>
            <label for="age">年齢：</label>
            <input type="text" name="age">
        </p>
        <button type="comfirm">確認画面へ</button>
    </form>
</body>

</html>