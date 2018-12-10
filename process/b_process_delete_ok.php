<?php
  include "../db.php";
  $num = $_GET['bidx'];
  $now = date('Y-m-d/h:i:s');
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM board WHERE idx = '$num'"));
  $result2 = mysqli_query($conn, "UPDATE board SET title = '게시물이 삭제되었습니다.', content = '이 글은 ".$row['name']." 님에 의해 ".$now." 이후로 삭제되었습니다.' WHERE idx = '$num'");
  echo "<script>alert('삭제되었습니다.')</script>";
 ?>
<script>
  location.href = "../index.php?id=board";
</script>
