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

  <title>施工事例 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Works_details">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">WORKS</h1>
          <h2 class="jumbo__wrap--head-jp">施工事例</h2>
        </div>
      </section>
      <section class="sect_1">
				<div class="wrapper">
          <div class="works">
            <div class="works__head">
              <h4 class="works__head--location">OFFICE / FACTORY</h4>
              <h3 class="works__head--title">株式会社イハラ製作所様 </h3>
            </div>
            <div class="works__content">
              <div class="works__content--left">
                <p class="w_content">
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
                テキストが入りますテキストが入りますテキストが入ります<br>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br><br>
                テキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入りますテキストが入ります<br>
                テキストが入りますテキストが入りますテキストが入ります
                </p>
                <ul class="list">
                  <li class="list__item">
                    <div class="list__item--title">
                      <p>所在地</p>
                    </div>
                    <div class="list__item--desc">
                      <p>静岡県浜松市</p>
                    </div>
                  </li>
                  <li class="list__item">
                    <div class="list__item--title">
                      <p>敷地面積</p>
                    </div>
                    <div class="list__item--desc">
                      <p>8,217㎡</p>
                    </div>
                  </li>
                  <li class="list__item">
                    <div class="list__item--title">
                      <p>構造</p>
                    </div>
                    <div class="list__item--desc">
                      <p>S造</p>
                    </div>
                  </li>
                  <li class="list__item">
                    <div class="list__item--title">
                      <p>階数</p>
                    </div>
                    <div class="list__item--desc">
                      <p>地上2階</p>
                    </div>
                  </li>
                  <li class="list__item">
                    <div class="list__item--title">
                      <p>竣工年</p>
                    </div>
                    <div class="list__item--desc">
                      <p>2006年</p>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="works__content--right">
                <div class="img_wrap">
                  <figure class="img_main">
                    <img src="/images/works_details/img_1.jpg" alt="株式会社イハラ製作所様 ">
                  </figure>
                  <ul class="img_list">
                    <li class="img_item isActive">
                      <img src="/images/works_details/img_2.jpg" alt="株式会社イハラ製作所様">
                    </li>
                    <li class="img_item">
                      <img src="/images/works_details/img_3.jpg" alt="株式会社イハラ製作所様">
                    </li>
                    <li class="img_item">
                      <img src="/images/works_details/img_4.jpg" alt="株式会社イハラ製作所様">
                    </li>
                    <li class="img_item">
                      <img src="/images/works_details/img_5.jpg" alt="株式会社イハラ製作所様">
                    </li>
                    <li class="img_item">
                      <img src="/images/works_details/img_6.jpg" alt="">
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="p-navi">
            <a href="" class="p-navi__btn left">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10"><path d="M6,0,0,5l6,5H8L2,5,8,0Z" fill-rule="evenodd"/></svg>
            </a>
            <a href="" class="p-navi__link center">
              LIST
            </a>
            <a href="" class="p-navi__btn right">
              <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="8" height="10" viewBox="0 0 8 10"><path d="M6,0,0,5l6,5H8L2,5,8,0Z" fill-rule="evenodd"/></svg>
            </a>
          </div>
				</div>
			</section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

  <script>
    $('.img_item').each(function(){
      $(this).click(function(){
        $('.img_item').removeClass('isActive');
        $(this).addClass('isActive');
        var src = $(this).find('img').attr('src');
        $(".img_main img").fadeTo(300,0, function() {
            $(".img_main img").attr("src",src);
        }).fadeTo(300,1);
      })
    })
  </script>

</body>

</html>
