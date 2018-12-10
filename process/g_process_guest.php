<?php
  include "../db.php";
  $date = date('Y-m-d h:i:s');
  $sql = "INSERT INTO guest (name, pw, date, content)
  VALUES ('".$_POST['name']."', '".$_POST['pw']."', '".$date."', '".$_POST['content']."')";
  $result = mysqli_query($conn, $sql);
  echo "<script>alert('작성완료!')</script>";
 ?>
<script>
  location.href = "../index.php?id=guest";
</script>
