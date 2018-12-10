<?php
  $result = mysqli_query($conn, "SELECT * FROM photo ORDER BY idx DESC");
 ?>

<div id="photo">
  <div id="p-upload-border">
    <div id="p-upload-image">
      <img src="" alt="이미지">
    </div>

    <div id="p-upload-form">
      <form action="./process/p_process_upload.php" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <input type="hidden" name="MAX_FILE_SIZE" value="3000000">
        <div>
          <input type="file" name="userfile" accept="image/jpeg,image/png" required>
        </div>
        <div>
          <input type="text" name="content" placeholder="한줄입력" size="40" maxlength="16" required>
        </div>
        <div id="p-upload-bottom">
          <input type="password" name="pw" placeholder="비밀번호" size="15" required>
          <button>사진 올리기</button>
        </div>
      </form>
    </div>
  </div>

  <div id="columns">
    <?php
      while($row = mysqli_fetch_assoc($result)){
     ?>
      <figure>
        <img src="./images/<?=$row['filename']?>" alt="./images/<?=$row['filename']?>">
        <figcaption><?=$row['content']?></figcaption>
      </figure>
    <?php } ?>
  </div>
</div>
