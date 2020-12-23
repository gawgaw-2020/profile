<?php

define("title", "【CONTACT】東京のWebサイト制作・Webサービス開発者｜タクヤ/TAKUYA");

?>
  <?php include(dirname(__FILE__).'/../_inc/_head.php'); ?>
<body>
  <?php include(dirname(__FILE__).'/../_inc/_header.php'); ?>
  <main>
  <section class="subView overlay">
    <div class="subView-inner animated" data-animate="fadeInLeft">
      <div class="subView-textContent">
        <h1>Contact</h1>
      </div>
      <ul class="subView-breadCrumbs">
        <li><a href="../index.html" target="_self">HOME</a><span>＞</span></li>
        <li><a href="index.html" target="_self">CONTACT</a><span></span></li>
      </ul>
    </div>
  </section>
  <section class="spacer"></section>
  <iframe src="https://docs.google.com/forms/d/e/1FAIpQLScfcXvQKSexJEKip_KO66Tb0bYGOIlZXBJKOrFZIRN7Lo23_A/viewform?embedded=true" width="100%" height="1100" frameborder="0" marginheight="0" marginwidth="0">読み込んでいます…</iframe>
  </main>
  <footer>
    <div class="main-inner">
      <div class="footer-items pc-only">
        <a href="../index.html">
          <p class="footer-icon"><img src="../img/takuya.png" alt=""></p>
          <p class="footer-logo"><img src="../img/find-tips.png" alt=""></p>
        </a>
      </div>
      <ul class="footer-list">
        <li class="footer-contents">
          <input type="checkbox" id="accordion-about">
          <label for="accordion-about"><p>About me</p></label>
          <ul class="content-list">
            <li><a href="../about/index.html#about">自己紹介</a></li>
            <li><a href="../about/index.html#want">やってみたいこと</a></li>
            <li><a href="../about/index.html#skill">やってきたこと</a></li>
          </ul>
        </li>
        <!-- <li class="footer-contents">
          <input type="checkbox" id="accordion-works">
          <label for="accordion-works"><p>Works<span>（制作中）</span></p></label>
          <ul class="content-list">
            <li><a href="#">自己開発アプリ<sapn class="text">「▲▲▲▲」</sapn></a></li>
            <li><a href="#">模写作品</a></li>
            <li><a href="#">ポートフォリオサイト</a></li>
            <li><a href="#">自己紹介サイト制作</a></li>
          </ul>
        </li> -->
        <li class="footer-contents">
          <input type="checkbox" id="accordion-links">
          <label for="accordion-links"><p>Links</p></label>
          <ul class="content-list">
            <!-- <li><a href="https://job.torahack.com/">エンジニア転職ゼミ<sapn class="text">｜とらゼミ</sapn></a></li> -->
            <li><a href="https://www.wantedly.com/users/134766669">Wantedly</a></li>
            <!-- <li><a href="https://hiroteku.com/hiroteku/">学習まとめブログ</a></li> -->
            <li><a href="https://twitter.com/_TAKUYA_jp">Twitter</a></li>
            <li><a href="https://github.com/takuya-jp">GitHub</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <p class="copyright">©️2020 Find tips</p>
  </footer>
  <!-- Swiper.js用のjsファイル -->
  <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
  <!-- ↓jQuery↓ -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
  <script src="../js/menu.js"></script>
  <script src="../js/swiper.js"></script>
  <script src="../js/animate.js"></script>
</body>
</html>