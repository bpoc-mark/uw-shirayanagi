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

  <title>業務内容 | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Service">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">SERVICE</h1>
          <h2 class="jumbo__wrap--head-jp">業務内容</h2>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <ul class="service">
            <li class="service--item">
              <h3 class="service--item__head">建築設計監理</h3>
              <p class="service--item__desc">
              構造設計一級建築士や設備設計一級建築士など高度な専門能力を持つ建築士が、<br class="pc">
              建築物のデザイン性とコストパフォーマンスの高さを両立させ、価値を最大化します。<br>
              商業施設や工場、事務所、医療・福祉施設、学校、公共施設など豊富な実績があります。
              </p>
              <table class="tbl_list">
                <tbody>
                  <tr>
                    <th>意匠設計</th>
                    <td>実用面とデザイン面の要求に適う建築を設計します。周辺環境や建物の配置、内部の構成、そして人間の行動や心理に至るまで、様々な課題に対する解をまとめ上げ、建築として造形します。</td>
                  </tr>
                  <tr>
                    <th>構造設計</th>
                    <td>長期間にわたって安心して利用できる建築物を提供するため、地震などの外力に対して構造的に安全で経済的にも優れた設計を行います。</td>
                  </tr>
                  <tr>
                    <th>設備設計</th>
                    <td>電気や給排水、空調などのインフラを設計し、快適な室内環境を実現するとともに、エネルギー利用を最適化します。</td>
                  </tr>
                  <tr>
                    <th>インテリア<br class="pc">デザイン</th>
                    <td>自然と建築が調和し、人と人が結びついて豊かなコミュニティーが生まれるランドスケープデザインを提案します。</td>
                  </tr>
                  <tr>
                    <th>景観設計</th>
                    <td>商業、医療福祉、教育など各種建築物の内装や照明、什器、家具などをトータルに提案します。</td>
                  </tr>
                  <tr>
                    <th>工事監理</th>
                    <td>建築主であるお客様の利益を守るため、施工会社が建築現場で進める工事を図面（設計図書）と照合・確認します。工事監理者は建築主が定めた建築士が務めます。</td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li class="service--item">
              <h3 class="service--item__head">耐震設計･補強</h3>
              <p class="service--item__desc">
                建築基準法に基づく現行の耐震基準を満たさない建築物を補強し、<br>
                長く利用できるようにするための耐震設計を行います。
              </p>
              <table class="tbl_list">
                <tbody>
                  <tr>
                    <th>耐震診断</th>
                    <td>大規模な鉄筋コンクリート造から小規模な木造まで、各種建築物の耐震診断を行います。</td>
                  </tr>
                </tbody>
              </table>
            </li>
            <li class="service--item">
              <h3 class="service--item__head">省エネコンサルティング</h3>
              <p class="service--item__desc">
                温室効果ガスの排出量削減やSDGsといった世界的な潮流を背景に、官民が省エネ化の取り組みに力を注いでいます。<br>
                これらのニーズに応えるためのコンサルティングや、最新設備を活用したソリューションの提案を行っています。
              </p>
              <h5 class="service--item__desc2">CASBEE (築環境総合性能評価システム) ランク取得支援</h5>
              <h5 class="service--item__desc2">ZEB (ネット･ゼロ･エネルギー･ビル) コンサルティング</h5>
            </li>
            <li class="service--item">
              <h3 class="service--item__head">リノベーション</h3>
              <p class="service--item__desc">
              既存建築物の性能を現代にふさわしい水準まで引き上げ、新しい価値を創出します。
              </p>
            </li>
            <li class="service--item">
              <h3 class="service--item__head">各種申請業務</h3>
              <p class="service--item__desc">
                建築物を活用した業務の立ち上げに必須の各種申請などを支援します。<br>
                保育園や学校、医療福祉施設をはじめとした特殊施設の整備基準や補助金申請などに関するノウハウを蓄積しています。
              </p>
            </li>
            <li class="service--item">
              <h3 class="service--item__head">定期点検業務</h3>
              <p class="service--item__desc">
              建築物や設備を安心・安全・快適に利用し続けるための維持・管理ソリューションを提供します。
              </p>
            </li>
          </ul>
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
