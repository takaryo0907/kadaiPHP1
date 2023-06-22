<html>

<head>
    <meta charset="utf-8">
    <title>どこに旅行へ行きたいか</title>
</head>

<body>
    <form action="write.php" method="post">
        お名前: <input type="text" name="name">
        出身: <input type="text" name="birthPlace">
        <input type="submit" value="送信">
        
        
        <input type="radio" name="site" value="漢字">髙橋
        <input type="radio" name="site" value="ひらがな">たかはし
        <input type="radio" name="site" value="かたかな" checked>タカハシ
        <input type="radio" name="site" value="英語" disabled>takahashi
        
    </form>
    
</body>

</html>