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

<body id="Works">
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
          <ul class="list">
						<?php
						$list = [
							['/images/top/sect_3/img_1.jpg', 'HOSPITAL', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_2.jpg', 'OFFICE', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_3.jpg', 'FACTORY / OFFICE', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_4.jpg', 'FACILITY', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_5.jpg', 'OFFICE', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_6.jpg', 'FACILITY', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_7.jpg', 'OFFICE / FACTORY', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_8.jpg', 'OFFICE', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_9.jpg', 'FACILITY', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_10.jpg', 'HOSPITAL', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_11.jpg', 'HOSPITAL', 'タイトルが入りますタイトルが入ります'],
							['/images/top/sect_3/img_12.jpg', 'OFFICE', 'タイトルが入りますタイトルが入ります'],
						];
						foreach ($list as $key => $el) :
						?>
							<li class="list__item">
								<a href="" class="list__link">
									<div class="list__link--img-wrap">
										<figure class="list__link--img-wrap--img">
											<img src="<?= $el[0] ?>" alt="<?= $el[1] ?>">
										</figure>
										<p class="list__link--img-wrap--location"><?= $el[1] ?></p>
									</div>
									<div class="list__link--title">
										<h3><span><?= $el[2] ?></span></h3>
									</div>
								</a>
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
			</section>
    </main>

    <footer>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
    </footer>
  </div><!-- //AllBox -->
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
</body>

</html>
