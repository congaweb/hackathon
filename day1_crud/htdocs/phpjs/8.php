<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>php 로그인 기능 구현</h1>
    <?php
    $password = $_GET['password'];
    if($password == "1111"){
        echo "안녕하세요 주인님";
    }else{
        echo "뉘신지?";
    }
    ?>
</body>
</html>