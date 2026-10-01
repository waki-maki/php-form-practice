<?php
// 入力画面から送信されたデータを受け取る
$name = $_POST["name"];
$email = $_POST["email"];
$age = $_POST["age"];
?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>確認画面</title>
</head>

<body>
    <h1>ユーザー登録（2/3）確認</h1>
    <p>以下の内容で登録します。よろしいですか？</p>
    <table>
        <tr>
            <td>お名前</td>
            <td><?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
        <tr>
            <td>メールアドレス</td>
            <td><?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
        <tr>
            <td>年齢</td>
            <td><?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?></td>
        </tr>
    </table>
    <form action="input.php" method="post">
        <button type="submit">戻る</button>
    </form>
    <form action="complete.php" method="POST">
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8') ?>">
        <input type="hidden" name="email" value="<?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
        <input type="hidden" name="age" value="<?php echo htmlspecialchars($age, ENT_QUOTES, 'UTF-8') ?>">
        <button type="submit" href="complete.php">登録する</button>
    </form>
</body>