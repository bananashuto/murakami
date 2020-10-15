<?php


// データベースを開いて、
$openFile = fopen('./data/profile.txt','r');

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($openFile)){
    echo nl2br($str);
}

// データベースをを閉じる
fclose($openFile);

?>


<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <link rel="stylesheet" href="http://localhost/php01_kadai/css/write.css">
</head>

<body>
    <div class="wrapper">
    <div class="button">
        <button><a href="write.php">前に戻る</a></button>
        <button><a href="post.php">TOPに戻る</a></button>
    </div>
    
    </div>
</body>

</html>