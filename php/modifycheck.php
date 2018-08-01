<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About YuRi LEE</title>
    <link rel="stylesheet" type="text/css" href="../css/header.css">
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
            <a href="../photo.html" data-hover="Photo">Photo</a>&nbsp; | &nbsp;
            <a href="../php/list.php" data-hover="GuestBook">GuestBook</a>
            <hr class="menu-hr">
        </nav>
    </header>
    <?php
    require_once('./dbconfig.php');
    @header("Content-type:text/html;charset=utf-8");
    if($_GET[mode]!="modify")
    {
     ?>
    <section id="conact">
      <div id="conact-div">
        <div id="conact-text">작성 시 입력했던 비밀번호 입력</div>
        <form method="post" action="<?=$_SERVER[PHP_SELF]?>?id=<?=$_GET[id]?>&mode=modify">
            <input type="password" id="fname" name="pass">
            <div id="button-div">
                <input type="submit" class="mail-button mail-btn">
            </div>
            
          </form>
      </div>

    </section>
    <?php
    exit;
  }
    $sql="SELECT pass FROM guestbook WHERE id='$_GET[id]'";
    $row=iconv("UHC", "UTF-8", $row);
    $result=$conn->query($sql);
    $row=$result->fetch_array();
    if($row[pass] == $_POST[pass])
    {
      echo "<script>alert('수정 페이지로 이동합니다');";
      echo "location.href='modify.php?id=$_GET[id]'</script>";
    }else{
      echo "<script>alert('비정상적인 요청입니다');";
      echo "location.href='list.php'</script>";
    }
     ?>
  </body>
</html>

