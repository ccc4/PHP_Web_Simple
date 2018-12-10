<?php
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM diary WHERE idx = '$num'"));
 ?>

<!-- 일기 본문 -->
<div id="today-date">
  <div id='today-date-title'>
    <h1><?=$row['title']?></h1>
  </div>
  <div id='today-date-name'>
    <strong><?=$row['name']?></strong>
  </div>
  <div id='today-date-content'>
    <?=$row['content']?>
  </div>
  <div class="today-date-button">
    <button onclick="alert('미구현')">수정</button>
    <button onclick="alert('미구현')">삭제</button>
  </div>
</div>
