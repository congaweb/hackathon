<?php
//mysql 연결
$conn = mysqli_connect("localhost", "root", "a64128379");
mysqli_select_db($conn, 'opentutorials');
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

        $sidebar_result = mysqli_query($conn, "SELECT * FROM topic");

        while ($sidebar_row = mysqli_fetch_assoc($sidebar_result)) {
            echo '<li><a href="http://localhost:81/index.php?id=' . $sidebar_row["id"] . '">' . $sidebar_row['title'] . '</a></li>';
        }

        mysqli_free_result($sidebar_result);
        ?>
    </ol>
</nav>
<div id="control">
    <input type="button" value="white" id="white_btn">
    <input type="button" value="black" id="black_btn">
    <a href="http://localhost:81/write.php">쓰기</a>
</div>
<article>
    <form action="update_process.php?id=<?=$_GET['id']?>" method="post">
        <?php
        $indexId = $_GET['id'];
//
//                $contents_select_stmt = $conn->prepare("SELECT FROM topic WHERE id=?");
//                $contents_select_stmt->bind_param("i", $indexId);
//                $contents_select_stmt->execute();
//
//                $contents_result = $contents_select_stmt->get_result();
//                $contents_row = $contents_result->fetch_assoc();
//                echo '<p>제목 : <input type="text" name="title" value="' . $contents_row['title'] . '"></p>';

        $contents_sql = "SELECT * FROM topic WHERE id=" . $indexId;
        $contents_result = mysqli_query($conn, $contents_sql);

        while ($contents_row = mysqli_fetch_assoc($contents_result)) {
            echo '<p>제목 : <input type="text" name="title" value="' . $contents_row['title'] . '"></p>';
            echo '<p>작성자 : <input type="text" name="author" value="' . $contents_row['author'] . '"></p>';
            echo '<p>본문 : <textarea name="description">' . $contents_row['description'] . '</textarea></p>';
        }
        mysqli_free_result($contents_result);
        ?>
        <input type="submit">
    </form>
</article>
<script src="/js/script.js"></script>
</body>
</html>