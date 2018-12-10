<?php
  header("Content-Type: text/html; charset=utf-8");
  include "../db.php";
  $MAX_FILE_SIZE = 3000000;


  // 비밀번호가 관리자비밀번호가 아닌경우
  if($_POST['pw'] !== '0070'){
    echo "<script>
            alert('관리자만 사용 가능합니다');
            history.back();
          </script>";
    return;
  }

  // 이미지 크기 체크
  if($_FILES['userfile']['size'] > $MAX_FILE_SIZE){
    echo "<script>
            alert('이미지 크기를 확인하세요');
            history.back();
          </script>";
    return;
  }

  // 같은 이름의 이미지가 이미 있을경우
  $result = mysqli_query($conn, "SELECT filename FROM photo");
  while($row = mysqli_fetch_assoc($result)){
    if($row['filename'] == $_FILES['userfile']['name']){
      echo "<script>
              alert('이미 있는 파일명입니다. 파일명을 바꿔서 다시 시도해주십시오');
              history.back();
            </script>";
      return;
    }
  }

  // image upload
  ini_set("display_errors", "1");
  $uploaddir = 'C:\Bitnami\wampstack-7.1.24-1\apache2\htdocs\php2\images\\';
  $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
  // 이미지파일 저장이 안되었을 경우
  if(move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile) !== true){
    echo "<script>
            alert('이미지파일을 확인하세요');
            history.back();
          </script>";
    return;
  }

  // DB INSERT
  $sql = "INSERT INTO photo (filename, content)
          VALUES ('".$_FILES['userfile']['name']."', '".$_POST['content']."')";
  $result2 = mysqli_query($conn, $sql);
  // DB에 INSERT가 실패하였을 경우
  if($result2 == true){
    echo "<script>
            alert('업로드 성공!');
          </script>";
  }else{
    echo "<script>
            alert('내용을 다시 작성해주세요');
            history.back();
          </script>";
    return;
  }
 ?>

 <script>
   location.href = "../index.php?id=photo";
 </script>
