<!DOCTYPE html>

<html>

  <head>

    <meta charset="utf-8">

    <title></title>

  </head>

  <body>

    <?php
    require_once('./dbconfig.php');
    @header("Content-type:text/html;charset=utf-8");
     ?>

    <form method="post" action="update.php?id=<?=$_GET[id]?>">

      <table width=600 border=1>

        <tr>

          <td>게시글을 수정해주세요.</td>

        </tr>

        <tr>

          <td><textarea placeholder="내용을 입력하세요" name="modicont" rows="8" cols="80"></textarea></td>

        </tr>

          <tr>

          <td align=right><input type="submit" value="확 인" /></td>

        </tr>

      </table>

    </form>

  </body>

</html>