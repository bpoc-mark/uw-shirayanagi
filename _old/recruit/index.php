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

  <title>採用情報 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Recruit">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">RECRUIT</h1>
          <h2 class="jumbo__wrap--head-jp">採用情報</h2>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <div class="row">
            <div class="col">
              <table>
                <tbody>
                  <tr>
                    <th>募集職種</th>
                    <td>建築設計監理</td>
                  </tr>
                  <tr>
                    <th>雇用形態</th>
                    <td>⑴ 正社員 … 建築設計 <br>⑵ パート … 設計補助</td>
                  </tr>
                  <tr>
                    <th>就業時間</th>
                    <td>
                    <p>⑴ 9：00～18：00（休憩1時間）</p>
                    <p>⑵ 9：00～18：00の間　<br>※時間･日数、相談に応じます。</p>
                    </td>
                  </tr>
                  <tr>
                    <th>給　与</th>
                    <td>資格･経験により優遇</td>
                  </tr>
                  <tr>
                    <th>昇　給</th>
                    <td>⑴ あり <br>⑵ なし</td>
                  </tr>
                  <tr>
                    <th>賞　与</th>
                    <td>
                      <p>⑴ あり　年2回、計2月分 (前年度実績)</p>
                      <p>⑵ なし</p>
                    </td>
                  </tr>
                  <tr>
                    <th>加入保険等</th>
                    <td>
                      <p>⑴ 雇用･労災･健康･厚生<br>退職金制度あり(勤続5年以上)</p>
                      <p>⑵ 雇用･労災･健康･厚生<br>（雇用契約が法令に基づく加入要件を満たした場合に加入）</p>
                    </td>
                  </tr> 
                  <tr>
                    <th>必要な資格･経験</th>
                    <td>
                      <p>⑴高卒以上、普通自動車免許（AT限定可） <br>建築設計･CAD経験（年数不問）</p>
                      <p>⑵なし（建築設計･CAD経験あれば尚可）</p>
                    </td>
                  </tr>
                  <tr>
                    <th>資　格</th>
                    <td>
                      <p>⑴一級、又は二級建築士（あれば尚可）</p>
                      <p>⑵なし</p>
                    </td>
                  </tr>
                  <tr>
                    <th>休日等</th>
                    <td>
                      第2･第4土、日、祝 <br>
                      夏季、GW、年末年始 <br>
                      車通勤可：通勤手当　実費（上限あり）
                    </td>
                  </tr>
                  <tr>
                    <th>試用期間</th>
                    <td>3か月</td>
                  </tr>
                  <tr>
                    <th>勤務地･連絡先</th>
                    <td>
                      株式会社白柳一級建築設計事務所<br>
                      静岡県浜松市中区高丘北4-6-35<br>
                      TEL：<a href="tel:053-439-0333">053-439-0333</a>  
                    </td>
                  </tr>
                </tbody>
              </table>
              <a href="" class="entry"><span>採用エントリーフォーム</span></a>
            </div>
            <div class="col">
              <figure>
                <img src="/images/recruit/img_1.jpg" alt="">
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
