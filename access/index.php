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

  <title>アクセス | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Access">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">ACCESS</h1>
          <h2 class="jumbo__wrap--head-jp">アクセス</h2>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="map_wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3277.612521372909!2d137.69375361553344!3d34.7653523872601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x601b20a547e3110d%3A0xa741b17324897076!2s4-ch%C5%8Dme-6-35%20Takaokakita%2C%20Naka%20Ward%2C%20Hamamatsu%2C%20Shizuoka%20433-8119%2C%20Japan!5e0!3m2!1sen!2sph!4v1639470548988!5m2!1sja!2sjp" width="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="row">
            <div class="col">
              <p>
              〒433-8119　<br class="sp">静岡県浜松市中区高丘北四丁目6番35号<br>
              TEL：<a href="tel:053-439-0333">053-439-0333</a> / FAX：053-439-7500 
              </p>
            </div>
            <div class="col">
              <a target="_blank" href="https://www.google.com/maps/place/4-ch%C5%8Dme-6-35+Takaokakita,+Naka+Ward,+Hamamatsu,+Shizuoka+433-8119,+Japan/@34.7653524,137.6937536,17z/data=!3m1!4b1!4m5!3m4!1s0x601b20a547e3110d:0xa741b17324897076!8m2!3d34.765348!4d137.6959423"><span>Google Map</span></a>
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
