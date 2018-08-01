<?php

require_once('./dbconfig.php');

@header("Content-type:text/html;charset=utf-8");
  $sql="UPDATE guestbook SET content='$_POST[modicont]', wdate=now() WHERE id='$_GET[id]'";
  $result=$conn->query($sql);

  echo "<script>alert('수정이 완료되었습니다.')</script>";

  echo "<script>location.href='list.php';</script>";

?>