<?php
  $str = "웹이즈프리닷컴";
  $test = iconv("EUC-KR", "UTF-8", $str);
  $result = strpos($test, '이즈');
echo $test;
  echo $result;
  // strpos() 함수는 위치를 반환하므로 2를 출력ㄴ
?>