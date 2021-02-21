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
    <form action="process.php" method="post">
        <p>
            제목 : <input type="text" name="title">
        </p>
        <p>
            작성자 : <input type="text" name="author">
        </p>
        <p>
            본문 : <textarea name="description"></textarea>
        </p>
        <input type="submit">
    </form>
</article>
<script src="/js/script.js"></script>
</body>
</html>