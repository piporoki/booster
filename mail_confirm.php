<!DOCTYPE>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <h1>お問い合わせ情報</h1>

    <div class="confirm">
     <p>お問い合わせ内容はこちらで宜しいでしょうか？
        <br>よろしければ「送信する」ボタンを押して下さい。
     </p>
     <p>名前
        <br>
        <?php echo $_POST['name']; ?>
        <!-- POSTメソッドで[index.html]から引き渡せれた箱を表示 -->
    </p>

    <p>メールアドレス
        <br>
        <?php echo $_POST['mail']; ?>
    </p>

    <p>年齢
        <br>
        <?php echo $_POST['age']."歳"; ?>
</p>

<p>コメント
    <br>
    <?php echo $_POST['comments']; ?>
</p>

<div class="buttons">
    <form action="index.html">
        <!-- action="○○"は、リンク先のURL(ファイル名)のこと -->
        <input type="submit" class="button1" value="戻って修正する" />
        <!-- value="○○"は、ボタン上に表示されるテキストのこと -->
</form>

<form method="post" action="insert.php">
    <input type="submit" class="button2" value="登録する"/>
    <!-- type(意味)→送信、class(役割)→ボタン、表示文字→"登録する -->
     <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
     <!-- "hiddenで内容を隠し、postメソッドで引き渡されたファイルをここで再度箱の中("name")に格納する" -->
      <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
      <input type="heidden" value="<?php echo $_POST['age']; ?>" name="age">
      <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
</form>
</div>

</body>
</html>
