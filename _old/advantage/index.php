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

  <title>当社の強み | <?php echo SITE_NAME ?></title>

  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Advantage">
  <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
  <div id="AllBox">
    <header>
      <?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
    </header>

    <main>
      <section class="jumbo">
        <div class="jumbo__wrap">
          <h1 class="jumbo__wrap--head-en">ADVANTAGE</h1>
          <h2 class="jumbo__wrap--head-jp">当社の強み</h2>
        </div>
      </section>
      <section class="sect_1">
        <div class="wrapper">
          <ul class="advantage">
            <li class="advantage__list">
              <picture class="advantage__list--img">
								<source srcset="/images/advantage/img_1.jpg" media="(min-width: 900px)">
								<img src="/images/advantage/sp/img_1.jpg" alt="高度なサービスを提供するトップクラスの人材">
							</picture>
              <div class="advantage__list--wrap">
                <div class="advantage__list--wrap__left">
                  <h3>高度なサービスを提供する<br>トップクラスの人材</h3>
                </div>
                <div class="advantage__list--wrap__right">
                  <p>
                  白柳一級建築設計事務所では、すべての構造計画を自社で行っています。<br>
                  そのため、信頼性の高い構造設計を効率よく進めることができます。<br>
                  一定規模を超える建築物の設計には高度な専門能力が求められることから、<br class="pc">
                  構造設計一級建築士が自ら設計するか、法適合確認を行うことが義務付けられています。<br>
                  ところが、一級建築士の上位資格とも言える構造設計一級建築士の有資格者は数が限られています。<br>
                  これは、一級建築士として構造設計業務に5年以上従事することなど、<br class="pc">
                  資格取得に厳しい条件が課されているためです。<br>
                  その点、白柳一級建築設計事務所には構造設計一級建築士をはじめ、<br class="pc">
                  設備設計のスペシャリストである設備設計一級建築士など、<br class="pc">
                  浜松エリアでトップクラスの人材がそろい、高度なサービスの提供が可能です。
                </p>
                </div>
              </div>
            </li>
            <li class="advantage__list">
              <picture class="advantage__list--img">
								<source srcset="/images/advantage/img_2.jpg" media="(min-width: 900px)">
								<img src="/images/advantage/sp/img_2.jpg" alt="高度なサービスを提供するトップクラスの人材">
							</picture>
              <div class="advantage__list--wrap">
                <div class="advantage__list--wrap__left">
                  <h3>高いデザイン性を<br>適正コストで実現します</h3>
                </div>
                <div class="advantage__list--wrap__right">
                  <p>
                    高いデザイン性を実現させる技量に加え、安全を最優先で確保しながら<br class="pc">
                    コストパフォーマンスを高めるノウハウを蓄積しているのが、白柳一級建築設計事務所の特徴です。<br class="pc">
                    例えば、設計を行った後、施工会社を決定する際に競争原理を働かせることで、施工費を適正化できます。<br class="pc">
                    施工中は白柳一級建築設計事務所が建築主の利益を守る視点で工事監理を行うため、<br>
                    設計通りの安全な建築物が適正なコストで完成します。
                  </p>
                </div>
              </div>
            </li>
            <li class="advantage__list">
              <picture class="advantage__list--img">
								<source srcset="/images/advantage/img_3.jpg" media="(min-width: 900px)">
								<img src="/images/advantage/sp/img_3.jpg" alt="高度なサービスを提供するトップクラスの人材">
							</picture>
              <div class="advantage__list--wrap">
                <div class="advantage__list--wrap__left">
                  <h3>補助金の申請手続きにも<br>対応可能です</h3>
                </div>
                <div class="advantage__list--wrap__right">
                  <p>
                    保育園や社会福祉法人などの施設を建設・改修する際、補助金を活用しない選択肢はありません。<br class="pc">
                    しかし、手続きに時間と労力が割かれるだけに、多忙な時期の申請は容易ではありません。<br class="pc">
                    そこで、白柳一級建築設計事務所では建築に関連する補助金申請にも対応が可能です。豊富なノウハウを活かし、補助金の活用方法やタイミングをご案内するほか、複雑な手続きをお手伝いします。
                  </p>
                </div>
              </div>
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
