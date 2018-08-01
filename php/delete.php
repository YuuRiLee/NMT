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
    if($_GET[mode]!="delete")

    {

     ?>

    <form method="post" action="<?=$_SERVER[PHP_SELF]?>?id=<?=$_GET[id]?>&mode=delete">

      <table border=1>

        <tr>

          <td>비밀 번호</td>

          <td><input type="password" name="pass" /></td>

          <td><input type="submit" value="확 인" /></td>

        </tr>

      </table>

    </form>

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