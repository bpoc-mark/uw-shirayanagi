<?php $url = $_SERVER['REQUEST_URI'];
$str = explode('/', $url); ?>

<div class="header_inner">
	<div class="h_left">
		<?php
		if ($str[1] == "") {
			echo '<h1 class="logo"><a href="/"><i>'. SITE_NAME .'</i></a></h1>';
		} else {
			echo '<p class="logo"><a href="/"><i>'. SITE_NAME .'</i></a></p>';
		}
		?>
	</div>
	<div class="h_right">
		<div class="menu" id="nav_menu">
			<span class="line line-t"></span>
			<!-- <span class="line line-m"></span> -->
			<span class="line line-b"></span>
			<p></p>
		</div>
		<div class="copy">
			<small>&copy; Shirayanagi Architect Office</small>
		</div>
	</div>
</div>

<nav class="nav" id="navMenu">
	<ul class="nav__list">
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>HOME<span>ホーム</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>NEWS<span>新着情報</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>WORKS<span>施工事例</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>COMPANY<span>会社紹介</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>BUSINESS<span>業務内容</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>ADVANTAGE<span>当社の強み</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>ACCESS<span>アクセス</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>RECRUIT<span>採用情報</span></a></li>
		<li class="nav__item"><a class="nav__link" href="/" <?php if ($str[1] == "") {
											echo ' class="here"';
										} ?>>CONTACT<span>お問い合わせ</span></a></li>
	</ul>
</nav>
