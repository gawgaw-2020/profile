<?php

define("title", "東京のWebサービス開発・Webサイト制作者｜がうがうさん/GAWGAW");

?>
  <?php include(dirname(__FILE__).'/_inc/_head.php'); ?>
<body>
  <?php include(dirname(__FILE__).'/_inc/_header.php'); ?>
  <main>
    <section>
      <div class="p-grid__view-first">
        <video src="img/first-view.mp4" autoplay muted loop playsinline poster="img/fv-ready.png"></video>
        <div class="view-first-contents">
          <h2 class="animated slower" data-animate="tada">
            <span>g</span>awgaw
            <p>＼ 2021年3月より転職活動開始 ／</p>
          </h2>
          <p>東京のWebサービス開発・Webサイト制作（学習中）</p>
          <div class="view-first-btns">
            <a class="p-btn-round btn-about" role="button"  href="/about/">About me</a>
            <a class="p-btn-round btn-works" role="button"  href="/contact/">Contact</a>
          </div>
        </div>
        <a class="scroll" href="#about"><span></span>Scroll</a>
      </div>
    </section>
    <section class="about" id="about">
      <div class="about-wrap">
        <div class="section-inner">
          <h2 class="section-title"><span class="text">ホームページ</span><span class="text">つくってみました！！</span> </h2>
          <p>
            html・CSSを学習したのでアウトプットとして簡単なポートフォリオサイトを作成しました！
            <sapn class="text">2021年3月の就職活動までにどんどん製作物を増やしていきます！</sapn>
          </p>
          <p>
            【この先の人生で成し遂げたい事】
          </p>
          <p>
            食 × Webの力で世の中をアップデート
            <span class="text">「美味しい・食事が楽しい」を広く届けたい</span>
          </p>
          <p>
            デザイン・プログラミング
            <sapn class="text">利用者の心を揺さぶるWebの世界を実現</sapn>
          </p>
        </div>
      </div>
    </section>
    <section class="want">
      <div class="want-wrap">
        <div class="section-inner">
          <h2 class="section-title">これから学びたいこと</h2>
          <ul class="want-list">
            <li>
              <h3 class="card-title"><span>1</span>Lorem, ipsum.</h3>
              <img src="img/want-coding.jpeg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                  Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
            <li>
              <h3 class="card-title"><span>2</span>Lorem, ipsum.</h3>
              <img src="img/want-pic.jpg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
            <li>
              <h3 class="card-title"><span>3</span>Lorem, ipsum.</h3>
              <img src="img/want-design.jpg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
            <li>
              <h3 class="card-title"><span>4</span>Lorem, ipsum.</h3>
              <img src="img/want-dev.jpg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
            <li>
              <h3 class="card-title"><span>5</span>Lorem, ipsum.</h3>
              <img src="img/want-team.jpg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
            <li>
              <h3 class="card-title"><span>6</span>Lorem, ipsum.</h3>
              <img src="img/want-business.jpg" alt="">
              <div class="text-wrap">
                <p class="card-text">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur dolor soluta fuga vel quae. Iste facilis adipisci quaerat cupiditate aspernatur!
                </p>
              </div>
            </li>
          </ul>
          <a class="p-btn-round btn-about" role="button"  href="about/index.php">詳しい自己紹介</a>
        </div>
      </div>
    </section>
    <!-- <section class="works">
      <div class="works-wrap">
        <div class="section-inner">
          <h2 class="section-title">制作実績</h2>
          <div class="swiper-container-wrapper">
            <div class="swiper-container p-grid__list">
              <div class="swiper-wrapper">
                  <div class="swiper-slide p-grid__list-item">
                    <a href="#">
                      <p class="card-pic"><img src="img/want-design.jpg" alt=""></p>
                      <h3>制作実績その1</h3>
                      <p class="card-text">架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり</p>
                    </a>
                  </div>
                  <div class="swiper-slide p-grid__list-item">
                    <a href="#">
                      <p class="card-pic"><img src="img/want-design.jpg" alt=""></p>
                      <h3>制作実績その2</h3>
                      <p class="card-text">架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり</p>
                    </a>
                  </div>
                  <div class="swiper-slide p-grid__list-item">
                    <a href="#">
                      <p class="card-pic"><img src="img/want-design.jpg" alt=""></p>
                      <h3>制作実績その3</h3>
                      <p class="card-text">架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり</p>
                    </a>
                  </div>
                  <div class="swiper-slide p-grid__list-item">
                    <a href="#">
                      <p class="card-pic"><img src="img/want-design.jpg" alt=""></p>
                      <h3>制作実績その4</h3>
                      <p class="card-text">架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり</p>
                    </a>
                  </div>
                  <div class="swiper-slide p-grid__list-item">
                    <a href="#">
                      <p class="card-pic"><img src="img/want-design.jpg" alt=""></p>
                      <h3>制作実績その5</h3>
                      <p class="card-text">架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり架空サイトです。ターゲットの選定からはやわかり</p>
                    </a>
                  </div>
              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"><i class="fas fa-chevron-left"></i></div> 
            <div class="swiper-button-next"><i class="fas fa-chevron-right"></i></div>
          </div>
          <a class="p-btn-round btn-works" role="button"  href="http://google.com">制作物一覧</a>
        </div>
      </div>
    </section> -->
    <section class="contact">
      <div class="contact-wrap">
        <div class="section-inner">
          <h2 class="section-title">各種お問い合わせ</h2>
          <p>内容についてのご質問は下記のリンクよりお送りください。<br>2021年の3月より就職活動を開始する予定です。<br>※1日以内のご連絡を心がけておりますが、場合によっては返信に時間を要する場合がございます。</p>
          <a class="p-btn-round btn-contact" role="button"  href="https://forms.gle/gckjJeUg48CJCbP19">お問い合わせ</a>
        </div>
      </div>
    </section>
  </main>
  <?php include(dirname(__FILE__).'/_inc/_footer.php'); ?>
  <!-- Swiper.js用のjsファイル -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.3.7/js/swiper.min.js"></script>
  <script src="js/menu.js"></script>
  <script src="js/swiper.js"></script>
  <script src="js/animate.js"></script>
  <script src="js/jamp.js"></script>
</body>
</html>