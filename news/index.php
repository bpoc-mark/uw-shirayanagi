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

  <title>新着情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="News">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">NEWS</h1>
          <h2 class="jumbo__wrap--head-jp">新着情報</h2>
        </div>
      </section>
      <div class="sect_1">
        <div class="wrapper">
          <ul class="news">
            <?php
              $list = [
                ['2021.07.01', '竣工しました', 'テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>', 'リンクの場合', '/images/news/img_1.jpg'],
                ['2021.06.30', 'こんなことがありました', 'テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>', '', ''],
                ['2021.06.20', '昨日のこと', 'テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>', '', ''],
                ['2021.06.10', '休暇のご案内', 'テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>', 'リンクの場合', '/images/news/img_2.jpg'],
                ['2021.06.01', 'HPが新しくなりました', 'テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br><br>テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>テキストが入りますテキストが入りますテキストが入ります<br>', '', ''],
              ];
              foreach ($list as $key => $el) :
              ?>
              <li class="news__li">
                <span class="news__li--date"><?= $el[0] ?></span>
                <h3 class="news__li--title"><?= $el[1] ?></h3>
                <p class="news__li--excerpt">
                  <?= $el[2]; ?>
                  <?php if(!empty($el[3])){ ?>
                  <a href="" class="news__li--link"><?= $el[3] ?></a>
                  <?php } ?>
                </p>
                <?php if(!empty($el[4])){ ?>
                  <span class="news__li--img"><img src="<?= $el[4] ?>" alt="<?= $el[4] ?>"></span>
                <?php } ?>
              </li>
            <?php endforeach; ?>
          </ul>
          <div class="p-navi">
            <a href="" class="p-navi__btn left">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10"><path d="M6,0,0,5l6,5H8L2,5,8,0Z" fill-rule="evenodd"/></svg>
            </a>
            <a href="" class="p-navi__btn right">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10"><path d="M6,0,0,5l6,5H8L2,5,8,0Z" fill-rule="evenodd"/></svg>
            </a>
          </div>
        </div>
      </div>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
