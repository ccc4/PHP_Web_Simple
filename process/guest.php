<?php
  include "./process/g_paging.php";
 ?>

<div id="guest_border">
  <!-- 방명록 쓰는곳 -->
  <div id="g-write-border">
    <form action="./process/g_process_guest.php" method="post">
    <div id="g-write-textarea">
      <textarea rows="3" name="content" required></textarea>
    </div>

    <div id="g-write-idpw">
        <div>
          <input size="12" type="text" name="name" placeholder="아이디" maxlength="8" required>
        </div>
        <div>
          <input size="12" type="password" name="pw" placeholder="비밀번호" maxlength="12" required>
        </div>
        <div id="g-write-button">
          <button>작성</button>
        </div>
    </div>
  </form>
  </div>

  <div class="guest_paging">
    <?=$paging?>
  </div>

  <!-- 방명록 나타내기 -->
  <div id="guest_view">
    <table id="guest_view_table">
      <?php
      // $result = mysqli_query($conn, "SELECT * FROM guest ORDER BY idx ASC");
      while($row = mysqli_fetch_assoc($result)){
      ?>
        <tr>
          <td width="60"><?=$row['name']?></td>
          <td width="250"><?=nl2br($row['content'])?></td>
          <td width="100" class="guest_right"><?=$row['date']?></td>
          <td width="5" class="guest_right"><button onclick="location.href='./index.php?id=g_process_delete&gidx=<?=$row['idx']?>'">x</button></td>
        </tr>
        <tr height="15"></tr>
      <?php } ?>
    </table>
  </div>

</div>
