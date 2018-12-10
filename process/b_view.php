<?php
  $num = $_GET['bidx'];
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM board WHERE idx = '$num'"));
// 조회수카운트
  $hit = $row['hit']+1;
  $fet = mysqli_query($conn, "UPDATE board SET hit = $hit WHERE idx = '$num'");
?>

<div class="board-main">
  <!-- colspan, rowspan = 셀합치기 -->
  <div id="board-view">
    <table id="board-view-table">
      <tr id="board-view-title">
        <td colspan="3"><h1><?=$row['title']?></h1></td>
      </tr>
      <tr height="40"></tr>
      <tr id="board-view-ndh">
        <td>
          <span>글쓴이 : <strong><?=$row['name']?></strong></span>
          <span>날짜 : <?=$row['date']?></span>
          <span>조회수 : <?=$hit?></span>
        </td
      </tr>
      <tr height="30"></tr>
      <tr>
        <td colspan="3"><?=nl2br($row['content'])?></td>
      </tr>
    </table>
    <div class="board-view-button">
      <button onclick="location.href='./index.php?id=board'">목록</button>
      <button onclick="location.href='./index.php?id=b_modify&bidx=<?=$num?>'">수정</button>
      <button onclick="location.href='./index.php?id=b_process_delete&bidx=<?=$num?>'">삭제</button>
    </div>
  </div>
</div>
