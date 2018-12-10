<?php
  $num = $_GET['bidx'];
 ?>
<script>
  function delete_confirm(){
    if(confirm("정말 삭제하시겠습니까?")){
      // yes click
      location.href = "./process/b_process_delete_ok.php?bidx=<?=$num?>";
    } else {
      // no click
      history.back(); // 돌아가기
    }
  }
  delete_confirm();
</script>
