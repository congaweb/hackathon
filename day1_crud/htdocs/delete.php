<?php
    $conn = mysqli_connect("localhost", "root", "a64128379");
    mysqli_select_db($conn, 'opentutorials');

    $indexId = $_GET['id'];
    $sqlD = "DELETE FROM topic WHERE id=".$indexId;
    $result = mysqli_query($conn, $sqlD);

    header('Location: http://localhost:81/index.php');
?>