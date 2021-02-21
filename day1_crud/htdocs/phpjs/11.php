<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>JavaScript</h1>
    <ul>
    <script>
        list = new Array("박바름", "김명주", "8도라", "이름", "뉴이름");
        i = 0;
        while(i < list.length){
            document.write("<li>"+list[i]+"</li>");
            i = i + 1;
        }
    </script>
    </ul>
    <h1>php</h1>
    <ul>
    <?php
        $list = array("박바름", "김명주", "8도라");
        $i = 0;
        while ($i < count($list)){
            echo "<li>".$list[$i]."</li>";
            $i = $i + 1;
        }
    ?>
        <ul>

</body>
</html>