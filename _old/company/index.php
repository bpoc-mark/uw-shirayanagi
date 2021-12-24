<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/config.php"); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/tag_manager.php"); ?>
  <meta charset="UTF-8" />
  <meta name="robots" content="index,follow">
  <link rel="canonical" href="<?php echo CANONICAL ?>">
  <meta name="keywords" content="<?php echo KEY_WORD ?>">
  <meta name="description" content="<?php echo DESCRIPTION ?>">
  <meta property="og:title" content="<?php echo SITE_NAME ?>">
  <meta property="og:type" content="article" /> <!-- 下層では「article」にしてください -->
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>会社紹介 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Company">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">COMPANY</h1>
          <h2 class="jumbo__wrap--head-jp">会社紹介</h2>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <ul class="list">
                <li class="list__item">
                  <div class="list__item--left">
                    <p>会社名</p>
                  </div>
                  <div class="list__item--right">
                    <p>株式会社白柳一級建築設計事務所</p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>事務所</p>
                  </div>
                  <div class="list__item--right">
                    <p>〒433-8119　<br class="sp">静岡県浜松市中区高丘北<br class="sp">四丁目6番35号　<a href="https://www.google.com/maps/place/4-ch%C5%8Dme-6-35+Takaokakita,+Naka+Ward,+Hamamatsu,+Shizuoka+433-8119,+Japan/@34.7653524,137.6937536,17z/data=!3m1!4b1!4m5!3m4!1s0x601b20a547e3110d:0xa741b17324897076!8m2!3d34.765348!4d137.6959423" target="_blank" class="map">MAP</a><br>
                      TEL：<a href="tel:053-439-0333">053-439-0333</a> / FAX：053-439-7500 </p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>設立</p>
                  </div>
                  <div class="list__item--right">
                    <p>昭和54年10月</p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>資本金</p>
                  </div>
                  <div class="list__item--right">
                    <p>1,000万円</p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>代表者</p>
                  </div>
                  <div class="list__item--right">
                    <p>代表取締役   :   白栁寿久<br class="sp">（一級建築士･構造設計一級建築士）</p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>業務内容</p>
                  </div>
                  <div class="list__item--right">
                    <p>
                    建築設計監理<br>
                    建築企画・デザイン<br>
                    耐震診断業務<br>
                    耐震補強業務 <br>
                    建築構造設計業務<br>
                    土地企画・開発　各種申請業務<br>
                    定期点検業務(建築物・建築設備)
                    </p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>資格者数</p>
                  </div>
                  <div class="list__item--right">
                    <p>
                    構造設計一級建築士<br>
                    設備設計一級建築士<br>
                    一級建築士<br>
                    二級建築士<br>
                    耐震診断補強相談士
                    </p>
                  </div>
                </li>
                <li class="list__item">
                  <div class="list__item--left">
                    <p>登録</p>
                  </div>
                  <div class="list__item--right">
                    <p>
                    一級建築士事務所 静岡県知事登録(7)<br class="sp">第3620号<br>
                    静岡県建築士会 会員<br>
                    静岡県建築士事務所協会 会員<br>
                    耐震診断補強相談士 会員
                    </p>
                  </div>
                </li>
              </ul>
            </div>
            <div class="col">
              <figure>
                <img src="/images/company/img_1.jpg" alt="">
              </figure>
              <figure>
                <img src="/images/company/img_2.jpg" alt="">
              </figure>
            </div>
          </div>
        </div>
      </section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
