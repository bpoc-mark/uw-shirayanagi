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
		<!-- <header>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/header_box.php"); ?>
		</header> -->

		<main>
			<section class="sect_1">
				<div class="wrapper">
					<div class="hero">
						<div class="base"></div>
						<h1>
							<img src="/images/top/sect_1/hero_img.svg" alt="SHIRAYANAGI ARCHITECT OFFICE 白柳一級建築設計事務所">
						</h1>
						<div class="slider_num">
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
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_1.jpg" alt="HOSPITAL">
									</figure>
									<p class="list__link--img-wrap--location">HOSPITAL</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_2.jpg" alt="OFFICE">
									</figure>
									<p class="list__link--img-wrap--location">OFFICE</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_3.jpg" alt="FACTORY / OFFICE">
									</figure>
									<p class="list__link--img-wrap--location">FACTORY / OFFICE</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_4.jpg" alt="FACILITY">
									</figure>
									<p class="list__link--img-wrap--location">FACILITY</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_5.jpg" alt="OFFICE">
									</figure>
									<p class="list__link--img-wrap--location">OFFICE</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_6.jpg" alt="FACILITY">
									</figure>
									<p class="list__link--img-wrap--location">FACILITY</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_7.jpg" alt="OFFICE / FACTORY">
									</figure>
									<p class="list__link--img-wrap--location">OFFICE / FACTORY</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_8.jpg" alt="OFFICE">
									</figure>
									<p class="list__link--img-wrap--location">OFFICE</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_9.jpg" alt="FACILITY">
									</figure>
									<p class="list__link--img-wrap--location">FACILITY</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_10.jpg" alt="HOSPITAL">
									</figure>
									<p class="list__link--img-wrap--location">HOSPITAL</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_11.jpg" alt="HOSPITAL">
									</figure>
									<p class="list__link--img-wrap--location">HOSPITAL</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
						</li>
						<li class="list__item">
							<a href="" class="list__link">
								<div class="list__link--img-wrap">
									<figure class="list__link--img-wrap--img">
										<img src="/images/top/sect_3/img_12.jpg" alt="OFFICE">
									</figure>
									<p class="list__link--img-wrap--location">OFFICE</p>
								</div>
								<h3 class="list__link--title">タイトルが入りますタイトルが入ります</h3>
							</a>
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

</body>

</html>
