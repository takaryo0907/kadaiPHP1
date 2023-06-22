<?php
$name = $_POST["name"];
$birthPlace = $_POST["birthPlace"];
$site = $_POST["site"];

$site = $site . "\n";
$name = $name . "\n";
$birthPlace = $birthPlace . "\n";

file_put_contents('data.txt', $name, FILE_APPEND);
file_put_contents('data_1.txt', $birthPlace, FILE_APPEND);
file_put_contents('data_2.txt', $site, FILE_APPEND);

?>


<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h1>入力ありがとうございます。</h1>


    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>