<?php
  include "../db.php";
  $num = $_POST['bidx'];
  $sql = "UPDATE board SET title = '".$_POST['title']."', content = '".$_POST['content']."' WHERE idx = '$num'";
  $result = mysqli_query($conn, $sql);
  echo "<script>alert('수정완료');</script>";

 ?>
<script>
  window.onload = function(){
    location.href = "../index.php?id=b_view&bidx=<?=$num?>";
  }
</script>
