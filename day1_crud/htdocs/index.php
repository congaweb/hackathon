<?php
    //mysql 연결
    $conn = mysqli_connect("localhost", "root", "a64128379");
    mysqli_select_db($conn, 'opentutorials');
    $result = mysqli_query($conn, "SELECT * FROM topic");

//    $test = mysqli_fetch_all($result);
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body id="target">
<header>
    <h1><a href="http://localhost:81/index.php">JavaScript</a></h1>
</header>
<nav>
    <ol>
        <?php
            while ($row = mysqli_fetch_assoc($result)){
                echo '<li><a href="http://localhost:81/index.php?id='.$row["id"].'">'.$row['title'].'</a></li>';
            }
        ?>
    </ol>
</nav>
<div id="control">
    <input type="button" value="white" id="white_btn">
    <input type="button" value="black" id="black_btn">
    <a href="http://localhost:81/write.php">쓰기</a>
</div>
<article>
    <?php
        if(empty($_GET['id']) === false){
            $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo '<h2>'.$row['title'].'</h2>';
            echo $row['description'];

            include("ud_button.php");
        }
    ?>
</article>
<script src="/js/script.js"></script>
</body>
</html>