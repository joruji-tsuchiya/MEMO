<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="css/style.css">

<title>よくわかるPHPの教科書</title>
</head>
<body>
<header>   
</header>

<main>
<pre>
<?php
    try{
        $db = new PDO('mysql:dbname=mydb;host=127.0.0.1;charset=utf8','root','root');
    } catch (PDOException $e) {
        echo 'DB接続エラー：　' . $e->getMessage();
    }
?>
</pre>
</main>
</body>    
</html>