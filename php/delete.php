<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About YuRi LEE</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="modifycheck.css">
</head>
  <body>
  <!--메뉴바-->
  <header>
        <nav class="menu">
            <a href="../index.html" data-hover="Home">Home</a>&nbsp; | &nbsp;
            <a href="../app.html" data-hover="App">App</a>&nbsp; | &nbsp;
            <a href="../web.html" data-hover="Web">Web</a>&nbsp; | &nbsp;
            <a href="../conact.html" data-hover="Conact">Conact</a>&nbsp; | &nbsp;
            <a href="../php/list.php" data-hover="GuestBook">GuestBook</a>
            <hr class="menu-hr">
        </nav>
    </header>

    <?php
    require_once('./dbconfig.php');
    @header("Content-type:text/html;charset=utf-8");
    if($_GET[mode]!="delete")
    {
     ?>
    <section id="conact">
      <div id="conact-div">
        <div id="conact-text">작성 시 입력했던 비밀번호 입력</div>
        <form method="post" action="<?=$_SERVER[PHP_SELF]?>?id=<?=$_GET[id]?>&mode=delete">
            <input type="password" id="fname" name="pass">
            <div id="button-div">
                <input type="submit" class="mail-button mail-btn" value="DELETE">
            </div>
            
          </form>
      </div>
    </section>
    <footer>
        <p>&copy; 2018 Lee Yu Ri &nbsp; | &nbsp; CONACT - yurilee9696@gmail.com &nbsp; | &nbsp; TEL - 010-3390-9696<p>
    </footer>
    <?php
    exit;
  }

    $sql="SELECT pass FROM guestbook WHERE id='$_GET[id]'";
    $result=$conn->query($sql);
    $row=$result->fetch_array();
    if($row[pass] == $_POST[pass])
    {
      $sql="DELETE FROM guestbook WHERE id='$_GET[id]'";
      $result=$conn->query($sql);
      echo "<script>alert('글이 삭제되었습니다');";
      echo "location.href='list.php'</script>";
    }else{
      echo "<script>alert('비밀번호가 틀렸습니다');";
      echo "location.href='list.php'</script>";
    }
     ?>
  </body>
</html>