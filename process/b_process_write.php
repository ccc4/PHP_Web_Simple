<?php
  include "../db.php";
  $date = date('Y-m-d H:i:s');
  $sql = "INSERT INTO board (name, pw, title, content, date, hit)
          VALUES ('".$_POST['name']."', '".$_POST['pw']."',
          '".$_POST['title']."', '".$_POST['content']."', '".$date."', 0)";
  $result = mysqli_query($conn, $sql);
  echo "<script>alert('작성완료');</script>";
 ?>

<script>
    location.href = "../index.php?id=board";
</script>
