<?php
  include "../db.php";
  if($_POST['pw'] !== '0070'){
    echo "<script>
            alert('관리자만 사용 가능합니다');
            history.back();
          </script>";
    return;
  }
  $date = date('Y-m-d');
  $sql = "INSERT INTO diary (name, title, content, date)
  VALUES ('".$_POST['name']."', '".$_POST['title']."', '".$_POST['content']."', '".$date."')";
  $result = mysqli_query($conn, $sql);
  echo "<script>alert('작성완료');</script>";
 ?>

<script>
    location.href = "../index.php?id=diary";
</script>
