<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/php01_kadai/css/post.css">
    <title>Document</title>
</head>
<body>
    <div class="wrapper">

        <h2>お申し込みフォーム</h2>

        <!-- 書き込むファイルを作る -->
        <form class="form" action="write.php" method="post">
        <table>
            <tr>
                <th>
                    お名前: 
                </th>
                <td>
                    <input type="text" name="name" style="width:200px;">
                </td>
            </tr>
            <tr>
                <th >
                    メールアドレス:
                </th>
                <td>
                    <input type="text" name="mail" style="width:200px;"> 
                </td>
            </tr>
            <tr>
                <th>
                    お住まい:
                </th>
                <td>
                    <input type="text" name="address" style="width:200px;">
                </td>
            </tr>
            <tr>
                <th>
                    ご職業:
                </th>
                <td>
                <input type="text" name="works" style="width:200px;">
                </td>
            </tr>
            <tr>
                <th>
                    メッセージ: 
                </th>
                <td>
                <input type="text" name="massege" style="width:200px;height:100px;">
                </td>
            </tr>
        </table>
        <div class="sousin"> 
            <input type="submit" value="送信" >
        </div>
        </form>

    </div>
    
</body>
</html>