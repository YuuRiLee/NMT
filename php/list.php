<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About YuRi LEE</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="guestbook.css">
</head>
  <body>
  <!--메뉴바-->
  <header>
        <nav class="menu">
            <a href="../index.html" data-hover="Home">Home</a>&nbsp; | &nbsp;
            <a href="../app.html" data-hover="App">App</a>&nbsp; | &nbsp;
            <a href="../web.html" data-hover="Web">Web</a>&nbsp; | &nbsp;
            <a href="../me.html" data-hover="About ME">About ME</a>&nbsp; | &nbsp;
            <a href="../conact.html" data-hover="Conact">Conact</a>&nbsp; | &nbsp;
            <a href="../php/list.php" data-hover="GuestBook">GuestBook</a>
            <hr class="menu-hr">
        </nav>
    </header>
    
    <?php
    require_once('./dbconfig.php');
    @header("Content-type:text/html;charset=utf-8");
    $pageNum = 5;
    $sql = "SELECT * FROM guestbook ORDER BY id DESC";
    $result = $conn->query($sql);
    $pageTotal = mysqli_num_rows($result);
    $start = $_GET['start'];
    if(!$start) $start=0;
    $sql = "SELECT * FROM guestbook ORDER BY id DESC limit $start, $pageNum";
    $sql=iconv("UHC", "UTF-8", $sql);
    $result = $conn->query($sql);

    ?>

    <br />
      <section id="insert">
        <div id="insert-div">
          <form action="insert.php" method="post">
            <div id="name-div">
              <div id="guestbook-text">NAME</div>
              <input type="text" name="name">
            </div>
            <div id="pass-div">
              <div id="guestbook-text">PASSWORD</div>
              <input type="password" name="pass">
            </div>
            <textarea placeholder="내용을 입력하세요" name="content" rows="8" cols="80" id="insert-content"></textarea>
            <div id="button-div">
              <input type="submit" value="등록" class="mail-button mail-btn">
            </div>
          </form>
        </div>
    </section>
    <section id="list">
    <?php
    while($row=$result->fetch_array()){
      echo "<table border=0 class='list-table'><tr>";
      echo "<td class='no'>No. $row[id]&nbsp; | &nbsp;</td>";
      echo "<td class='name'>$row[name]&nbsp; | &nbsp;</td>";
      echo "<td class='date'>$row[wdate]</td></tr>";

      echo "<tr class='content'><td colspan=5>$row[content]</td></tr>";
      
      echo "<tr><td class='del'><a href='delete.php?id=$row[id]' class='mail-button mail-btn' style='padding:0.5em 1em;'>삭제</a></td>";
      echo "<td class='edit'><a href='modifycheck.php?id=$row[id]' class='mail-button mail-btn' style='padding:0.5em 1em;'>수정</a></td></tr>";
      echo "</table>";
      echo "<br />";
    }
    $pages = $pageTotal / $pageNum;
    echo "<div class='page-div'>";
    for($i=0; $i<$pages; $i++){
      $nextPage = $pageNum * $i;
      echo "<a href=$_SERVER[PHP_SELF]?start=$nextPage class='page-number'>$i</a>";
    }
    echo "</div>";
    ?>
    </section>
    <footer>
        <p>&copy; 2018 Lee Yu Ri &nbsp; | &nbsp; CONACT - yurilee9696@gmail.com &nbsp; | &nbsp; TEL - 010-3390-9696<p>
    </footer>
  </body>

</html>

