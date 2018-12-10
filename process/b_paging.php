<?php
  $page = isset($_GET['page']) ? $_GET['page'] : 1;

  $sql = "SELECT count(*) AS cnt FROM board";
  $row = mysqli_fetch_assoc(mysqli_query($conn, $sql));

  $allPost = $row['cnt']; //전체 게시글의 수

  $onePage = 25; //한 페이지에 보여줄 게시글의 수
  $allPage = ceil($allPost / $onePage); //전체 페이지의 수

  if($page < 1 || ($allPage && $page > $allPage)){
 ?>
  <script>
    alert("존재하지 않는 페이지입니다.");
    history.back();
  </script>
  <?php
  exit;
  }

  $oneSection = 10; //한번에 보여줄 총 페이지 갯수 (1~10, 11~20)
  $currentSection = ceil($page / $oneSection); // 현재 섹션
  $allSection = ceil($allPage / $oneSection); // 전체 섹션의 수

  $firstPage = ($currentSection * $oneSection) - ($oneSection - 1); //현재 섹션의 처음 페이지

  if($currentSection == $allSection){
    $lastPage = $allPage; // 현재 섹션이 마지막 섹션이라면 $allPage가 마지막 페이지가된다.
  }else{
    $lastPage = $currentSection * $oneSection; // 현재 섹션의 마지막 페이지
  }

  $prevPage = (($currentSection - 1) * $oneSection); // 이전페이지, 11~20일때 이전 누르면 10페이지로
  $nextPage = (($currentSection + 1) * $oneSection) - ($oneSection - 1); // 다음페이지


  $paging = '<div>'; // 페이징을 저장할 변수

  // 첫 페이지가 아니라면 처음 버튼을 생성
  if($page != 1){
    $paging .= '<a href="./index.php?id=board&page=1">처음</a>';
  }else if($page = 1){
    $paging .= '<strong class="">처음</strong>';
  }
  // 첫 섹션이 아니라면 이전 버튼을 생성
  if($currentSection != 1) {
    $paging .= '<a href="./index.php?id=board&page='.$prevPage.'">이전</a>';
  }else if($currentSection = 1){
    $paging .= '<strong class="page current">이전</strong>';
  }

  for($i = $firstPage; $i <= $lastPage; $i++){
    if($i == $page){
      $paging .= '<strong class="">'.$i.'</strong>';
    }else{
      $paging .= '<a href="./index.php?id=board&page='.$i.'">'.$i.'</a>';
    }
  }

  // 마지막 섹션이 아니라면 다음 버튼을 생성
  if($currentSection != $allSection){
    $paging .= '<a href="./index.php?id=board&page='.$nextPage.'">다음</a>';
  }else if($currentSection = $allSection){
    $paging .= '<strong class="">다음</strong>';
  }
  // 마지막 페이지가 아니라면 끝 버튼을 생성
  if($page != $allPage){
    $paging .= '<a href="./index.php?id=board&page='.$allPage.'">끝</a>';
  }else if($page = $allPage){
    $paging .= '<strong class="">끝</strong>';
  }
  $paging .= '</div>';
  //페이징 끝

  $currentLimit = ($onePage * $page) - $onePage; // 몇 번째의 글부터 가져오는지
  $sqlLimit = ' limit '.$currentLimit.', '.$onePage; //limit sql 구문

  $sql = 'SELECT * FROM board ORDER BY idx desc'.$sqlLimit;
  $result = mysqli_query($conn, $sql);
?>
