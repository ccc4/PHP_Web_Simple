<?php
  $num = $_GET['gidx'];
 ?>
<script>
  function delete_confirm(){
    if(confirm("정말 삭제하시겠습니까?")){
      // yes click
      location.href = "./process/g_process_delete_ok.php?gidx=<?=$num?>";
    } else {
      // no click
      history.back(); // 돌아가기
    }
  }
  delete_confirm();
</script>
