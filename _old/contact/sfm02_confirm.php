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
  <meta property="og:description" content="<?php echo DESCRIPTION ?>" />
  <meta property="og:url" content="<?php echo CANONICAL ?>" />

  <title>お問い合わせ | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Competitive">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main id="Contact" class="sfm2">
      <section class="jumbo">
				<div class="jumbo__wrap">
					<h1 class="jumbo__wrap--head-en">CONTACT</h1>
					<h2 class="jumbo__wrap--head-jp">お問い合わせ</h2>
				</div>
			</section>
      <section class="form-sec">
        <div class="form_wrap">
        <p>お仕事のご相談・依頼や、採用エントリーはこちらのフォームよからお問い合わせください。<br>お電話の方はこちら  <br class="sp"><span>TEL : <a href="tel:053-439-0333">053-439-0333</a></span></p>
          <form method="post" name="sfm-form" id="sfm-form" action="./">

            <table>

              <tr>
                <th>お問い合わせ項目 <span class="need">* </span></th>
                <td>
                  <p><?php echo $sfm_html->inquiry; ?></p>
                </td>
              </tr>

              <tr>
                <th>お名前 <span class="need">* </span></th>
                <td>
                  <p><?php echo $sfm_html->name; ?></p>
                </td>
              </tr>

              <tr>
                <th>フリガナ</th>
                <td>
                  <p><?php echo $sfm_html->furigana; ?></p>
                </td>
              </tr>

              <tr>
                <th>会社名</th>
                <td>
                  <p><?php echo $sfm_html->company_name; ?></p>
                </td>
              </tr>

              <tr>
                <th>メールアドレス</th>
                <td>
                  <p><?php echo $sfm_html->email; ?></p>
                </td>
              </tr>

              <tr>
                <th>電話番号</th>
                <td>
                  <p><?php echo $sfm_html->tel; ?></p>
                </td>
              </tr>

              <tr>
                <th>住所</th>
                <td>
                  <p>〒<?php echo $sfm_html->zip; ?></p>
                  <p><?php echo $sfm_html->address; ?></p>
                </td>
              </tr>

              <tr>
                <th>お問い合わせ内容</th>
                <td>
                  <p><?php echo $sfm_html->message; ?></p>
                </td>
              </tr>

            </table>

            <div class="submit_area">
              <?php echo $sfm_submit; ?>
            </div><!-- submit_area -->

          </form>
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
