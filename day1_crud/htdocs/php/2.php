<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <?php
        echo file_get_contents($_GET['id'].".txt");
    ?>
</body>
</html>