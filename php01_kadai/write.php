<?php

//取得
$name = $_POST['name']; 
$mail = $_POST['mail']; 
$address = $_POST['address']; 
$works = $_POST['works']; 
$massege = $_POST['massege']; 

// 日付取得
$time = date("T年m月d日 H時i分s秒");
$str1 ='<tr>'.'<th>'.'お名前：'.'</th>'.'<td>'.$time .'</td>'.'</tr>';
$str2 = '<tr>'.'<th>'.'メール：'.'</th>'.'<td>'.$mail .'</td>'.'</tr>';
$str3 = '<tr>'.'<th>'.'住所：'.'</th>'.'<td>'.$address .'</td>'.'</tr>';
$str4 = '<tr>'.'<th>'.'職業：'.'</th>'.'<td>'.$works .'</td>'.'</tr>';
$str5 = '<tr>'.'<th>'.'メッセージ：'.'</th>'.'<td>'.$massege .'</td>'.'</tr>';

$str = '<table>'.$str1 .$str2 .$str3 .$str4 .$str5.'</table>';


//書き込み(データベースを開いて、書いて、閉じる)
$file = fopen('./data/profile.txt','a'); //開いて ※場所を指定 ※aは書き込む
fwrite($file, $str . "\n"); //書き込んで  ※内容を指定, nは改行
fclose($file); //閉じる *ここまで一連の流れ
?>



<html>
<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
    <link rel="stylesheet" href="http://localhost/php01_kadai/css/write.css">
</head>

<body>
    <div class="wrapper">

    <h2>お申し込みが完了しました</h2>
    <!-- ここに入れる。 -->
    <p><?= $str ?></p>
    <div class="button">
        <button><a href="post.php">戻る</a></button>
        <button><a href="read.php">参加者をみる</a></button>
    </div>
    
    </div>
</body>

</html>