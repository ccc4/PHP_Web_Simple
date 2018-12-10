<?php
  $num = $_GET['bidx'];
  $row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM board WHERE idx = '$num'"));
?>

<div class="board-main">
  <h2>글수정</h2>
  <div class="board-write">
    <form action="./process/b_process_modify.php?bidx=<?=$num?>" method="post">
      <input type="hidden" name="bidx" value="<?=$num?>">
      <table>
        <tr>
          <td>
            <label for="uname">이름</label>
          </td>
          <td>
            <input size="20" type="text" name="name" id="uname" value="<?=$row['name']?>" maxlength="8" required disabled>
          </td>
        </tr>
        <tr>
          <td>
            <label for="upw">비밀번호</label>
          </td>
          <td>
            <input size="20" type="password" name="pw" id="upw" disabled>
          </td>
        </tr>
        <tr>
          <td>
            <label for="utitle">제목</label>
          </td>
          <td>
            <input size="108" type="text" name="title" id="utitle" value="<?=$row['title']?>" maxlength="50" required>
          </td>
        </tr>
        <td>
          <label for="ucontent">내용</label>
        </td>
        <td>
          <textarea name="content" id="ucontent" rows="12" cols="80" required><?=$row['content']?></textarea>
        </td>
      </table>
      <div class="b_write_button">
        <button>작성</button>
      </div>
    </form>
  </div>
</div>
