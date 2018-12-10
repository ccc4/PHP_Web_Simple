<?php
  include "./process/b_paging.php";
 ?>

<div class="board-main">
  <table class="main-table">
    <thead>
      <tr>
        <th width="30px">번호</th>
        <th width="350px">제목</th>
        <th width="100px">글쓴이</th>
        <th width="60px">날짜</th>
        <th width="40px">조회수</th>
      </tr>
    </thead>
    <?php
      // $result = mysqli_query($conn, "SELECT * FROM board ORDER BY idx DESC LIMIT 0,20");
      while($row = mysqli_fetch_assoc($result)){
        $title = $row['title'];
        if(mb_strlen($title)>25){
          $title = str_replace($row['title'],mb_substr($row['title'],0,25)."...",$row['title']);
        }
        $datetime = explode(' ', $row['date']);
        $date = $datetime[0];
        $time = $datetime[1];
        if($date == date('Y-m-d')){
          $row['date'] = $time;
        }else{
          $row['date'] = $date;
        }
     ?>
    <tbody>
      <tr>
        <td width="30px"><?=$row['idx']?></td>
        <td width="350px"><a href="index.php?id=b_view&bidx=<?=$row['idx']?>"><?=$title?></a></td>
        <td width="100px"><?=$row['name']?></td>
        <td width="60px"><?=$row['date']?></td>
        <td width="40px"><?=$row['hit']?></td>
      </tr>
    </tbody>
  <?php } ?>
</table>
  <div class="b_button">
    <button onclick="location.href='index.php?id=b_write'">글쓰기</button>
  </div>
  <div class="board_paging">
    <?=$paging?>
  </div>
</div>
