<?php
    $conn = mysqli_connect("localhost", "root", "a64128379");
    mysqli_select_db($conn, 'opentutorials');

    $indexId = $_GET['id'];

    $sqlU = "UPDATE topic SET title='".$_POST['title']."', description='".$_POST['description']."', author='".$_POST['author']."' WHERE id=".$indexId;

    $result = mysqli_query($conn, $sqlU);

    header('Location: http://localhost:81/index.php?id='.$indexId);
?>