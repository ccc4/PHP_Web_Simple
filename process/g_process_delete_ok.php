<?php
  include "../db.php";
  $num = $_GET['gidx'];
  $result = mysqli_query($conn, "DELETE FROM guest WHERE idx='$num'");
  echo "<script>alert('삭제되었습니다.')</script>";
?>
<script>
  location.href="../index.php?id=guest";
</script>
