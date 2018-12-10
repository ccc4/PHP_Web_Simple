<?php
  include "./db.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./style.css">
    <title>슈야미야 블로그</title>
    <link rel="shortcut icon" href="./main_images/syuyacon.ico">
  </head>

  <body>
    <!-- 전체 -->
    <div id="whole-body">
      <!-- 상단 -->
      <div id="top-area">
        <!-- 상단배너 -->
        <?php include "./process/hi.html"; ?>
        <div id="blog-title">
          <a href="./index.php">
            <img src="./main_images/blog-profile1.jpg" alt="shu" class="blog-profile">
          </a>
          <a href="./index.php">
            <img src="./main_images/blog-profile2.jpg" alt="miya" class="blog-profile">
          </a>
          <a href="./index.php">
            <span><h1>슈야미야 블로그</h1></span>
          </a>
        </div>
      </div>

      <div id="wrapper">
        <!-- 상단 메인 가로메뉴 -->
        <div id="menu">
          <ul>
            <li><a href="./index.php?id=diary">하루 일기</a></li>
            <li><a href="./index.php?id=photo">사진첩</a></li>
            <li><a href="./index.php?id=movie">영상관</a></li>
            <li><a href="./index.php?id=board">집사들 이모저모</a></li>
            <li><a href="./index.php?id=guest">방명록</a></li>
          </ul>
        </div>
        <!-- 본문 -->
        <div id="article">
          <?php
          if(empty($_GET['id']) == false) {
            include("./process/".$_GET['id'].".php");
          } else{
            include("./process/index_main.php");
          }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
