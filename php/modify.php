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
     ?>
    <section id="modify">
      <div id="modify-div">
        <div id="conact-text">게시글을 수정해주세요</div>
        <form method="post" action="update.php?id=<?=$_GET[id]?>">
            <textarea placeholder="내용을 입력하세요" name="modicont" id="insert-content"></textarea>
            <div id="button-div">
                <input type="submit" class="mail-button mail-btn" value="EDIT">
            </div>
          </form>
      </div>
    </section>
    <footer>
        <p>&copy; 2018 Lee Yu Ri &nbsp; | &nbsp; CONACT - yurilee9696@gmail.com &nbsp; | &nbsp; TEL - 010-3390-9696<p>
    </footer>
  </body>
</html>

