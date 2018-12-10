<?php
  $result = mysqli_query($conn, "SELECT * FROM diary order by idx DESC");
 ?>
<!-- 좌측 메뉴 -->
<div id="today-menu">
  <ul>
    <?php
      while($row = mysqli_fetch_assoc($result)){
        echo '<li><a href="./index.php?id=diary&diary='.$row['idx'].'">'.$row['date'].'</a></li>'."\n";
      }
     ?>
  </ul>
</div>
<div class="diary_write_button">
  <button onclick="location.href='index.php?id=d_write'">일기작성</button>
</div>
<?php
if(empty($_GET['diary']) == false) {
  $num = $_GET['diary'];
  include("./process/d_date.php");
}
?>
