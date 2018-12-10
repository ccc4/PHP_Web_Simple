<div class="board-main">
  <h2>게시판 글쓰기</h2>
  <div class="board-write">
    <form action="./process/b_process_write.php" method="post">
      <table>
        <tr>
          <td><label for="uname">이름</label></td>
          <td><input size="20" type="text" name="name" id="uname" maxlength="8" required></td>
        </tr>
        <tr>
          <td><label for="upw">비밀번호</label></td>
          <td><input size="20" type="password" name="pw" id="upw" required></td>
        </tr>
        <tr>
          <td><label for="utitle">제목</label></td>
          <td><input size="107" type="text" name="title" id="utitle" maxlength="50" required></td>
        </tr>
        <tr>
          <td><label for="ucontent">내용</label></td>
          <td><textarea name="content" id="ucontent" rows="12" cols="79" required></textarea></td>
        </tr>
      </table>
      <div class="b_write_button">
        <button>작성</button>
      </div>
    </form>
  </div>
</div>
