<?php
    require_once('./dbconfig.php');

    @header("Content-type:text/html;charset=utf-8");
    $sql = "INSERT INTO guestbook (name, pass, content) VALUES('$_POST[name]', '$_POST[pass]', '$_POST[content]')";
    $conn->query($sql);

    echo "<script>alert('글이 등록되었습니다.');";
    echo "location.href='list.php';</script>";
     ?>