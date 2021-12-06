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
	<meta property="og:type" content="website" /> <!-- 下層では「article」にしてください -->
	<meta property="og:description" content="<?php echo DESCRIPTION ?>" />
	<meta property="og:url" content="<?php echo CANONICAL ?>" />

	<title><?php echo SITE_NAME ?></title>

	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_include.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/ga.php"); ?>
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/header_tag.php"); ?>
</head>

<body id="Top">
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/content_tag.php"); ?>
	<div id="AllBox">
		<header class="p-top">
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header>

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<div class="hero">
						<div class="base"></div>
						<h2>
							<img src="/images/top/sect_1/hero_img.svg" alt="SHIRAYANAGI ARCHITECT OFFICE 白柳一級建築設計事務所">
						</h2>
						<div class="slider_num">
							<svg id="f5ec71fd-8ccd-46a5-83ba-0b1b195b6b31" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.9 72.9"><circle cx="36.45" cy="36.45" r="35.95" style="fill:none;stroke-linecap:round;stroke-linejoin:round"/></svg>
							<span>0</span>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_2">
				<div class="wrapper">
					<div class="news">
						<div class="news__item">
							<h3 class="news__cat">NEWS :</h3>
							<a href="" class="news__link">
								<span class="news__link--date">2021.06.01</span>
								<div class="news__link--title">
									<p>タイトルが入りますタイトルが入りますタイトルが入ります</p>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<section class="sect_3">
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
									<h3 class="list__link--title"><?= $el[2] ?></h3>
								</a>
							</li>
						<?php endforeach; ?>
					</ul>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>

	<script>
		$(".hero .base").vegas({
			slides: [
				{ src: "/images/top/sect_1/bg_img.jpg" },
				{ src: "/images/top/sect_1/bg_img.jpg" },
				{ src: "/images/top/sect_1/bg_img.jpg" },
			],
			transition: ['fade'],
			animation: 'kenburns',
			// timer: false,
			delay: 5000,
			walk: function (index, slideSettings) {
				let slide_num = index + 1;
				var slide = (slide_num < 10) ? '0'+ slide_num : slide_num;
				$('.slider_num span').text(slide);
			}
		});
	</script>

	<script>	
		$(document).ready(function(){
			// $(window).on('load', function (e) {
				$('.sect_1 .wrapper .hero').addClass('isOpened');
			// })
		});
	</script>

</body>

</html>
