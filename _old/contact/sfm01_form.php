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

		<main id="Contact" class="sfm1">
			<section class="jumbo">
				<div class="jumbo__wrap">
					<h1 class="jumbo__wrap--head-en">CONTACT</h1>
					<h2 class="jumbo__wrap--head-jp">お問い合わせ</h2>
				</div>
			</section>
			<section class="form-sec">
				<div class="form_wrap">
					<p>お仕事のご相談・依頼や、採用エントリーはこちらのフォームよからお問い合わせください。<br class="sp">お電話の方はこちら  <br><span>TEL : <a href="tel:053-439-0333">053-439-0333</a></span></p>

					<form method="post" name="sfm-form" id="sfm-form" action="./">
						<table>
							<tr>
								<th>お問い合わせ項目 <span class="need">*</span></th>
								<td>
									<div class="checkbox">
										<input type="hidden" name="inquiry_s" />
										<ul class="check-list type">
											<li>
												<input class="checkbox_item" type="radio" name="inquiry_s[]" value="お問い合わせ" id="radio01" />&nbsp;
												<label for="radio01">お問い合わせ</label>
											</li>
											<li>
												<input class="checkbox_item" type="radio" name="inquiry_s[]" value="採用について" id="radio02" />&nbsp;
												<label for="radio02">採用について</label>
											</li>
										</ul>
									</div>
								</td>
							</tr>

							<tr>
								<th>お名前 <span class="need">*</span></th>
								<td><input type="text" name="name_s" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>フリガナ</th>
								<td><input type="text" name="furigana" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>会社名</th>
								<td><input type="text" name="company_name" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>メールアドレス <span class="need">*</span></th>
								<td><input type="text" name="email_s" value="" title="" placeholder=""></td>
							</tr>

							<tr>
								<th>電話番号</th>
								<td><input type="text" name="tel" value="" title="" placeholder=""></td>
							</tr>

							<tr class="address">
								<th>住所 <span class="need"></span></th>
								<td>
									<span class="zip-wrap">
										<input class="zip" type="text" name="zip" size="10" maxlength="8" placeholder="">
									</span>
									<input class="ad_btn" type="button" value="住所自動入力"><br>
									<input class="text02" type="text" name="address" size="60" placeholder="">
								</td>
							</tr>

							<tr>
								<th>お問い合わせ内容 <span class="need">*</span></th>
								<td><textarea name="message_s" title=""></textarea></td>
							</tr>

						</table>

						<div class="agree_area">
							<input type="checkbox" name="agree" id="checkAgree">
							<label for="checkAgree" class="checkAgree"><a href="">プライバシーポリシー</a>に同意しました</label>
						</div>

						<div class="submit_area">
							<span>
								<input id="checkSubmit" type="submit" value="入力内容確認" class="pushbtn" />
							</span>
						</div><!-- submit_area -->


						<input type="hidden" name="mailToNum" value="0" />
						<input type="hidden" name="mode" value="CONFIRM" />
					</form>
				</div>
			</section>
		</main>

		<footer>
			<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/footer_box.php"); ?>
		</footer>
	</div><!-- //AllBox -->
	<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/tag/footer_tag.php"); ?>
	<script src="https://ajaxzip3.github.io/ajaxzip3.js"></script>
	<script src="/js/jquery.validate.min.js"></script>
	<script>
		// 同意ボタンのチェックがされているか
		const checkbox = document.querySelector('#checkAgree');
		const submitButton = document.querySelector('#checkSubmit');

		let changeDisabled = function() {
			if (checkbox.checked) {
				submitButton.disabled = "";
				submitButton.style.opacity = 1;
				submitButton.parentNode.style.pointerEvents = "auto";
			} else {
				submitButton.disabled = "disabled";
				submitButton.style.opacity = 0.4;
				submitButton.parentNode.style.pointerEvents = "none";
			}
		}
		checkbox.addEventListener("change", changeDisabled);
		window.onload = changeDisabled;
		//


		(function() {
			//標準エラーメッセージの変更
			$.extend($.validator.messages, {
				email_s: '*正しいメールアドレスの形式で入力して下さい',
				required: '*入力必須です',
			});

			//追加ルールの定義
			var methods = {
				email: function(value, element) {
					return this.optional(element) || /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/.test(value);
				},
			};

			//メソッドの追加
			$.each(methods, function(key) {
				$.validator.addMethod(key, this);
			});

			//入力項目の検証ルール定義
			var rules = {
				name_s: {
					required: true
				},
				email_s: {
					email: true,
					required: true,
				},
				'inquiry_s[]': {
					required: true,
				},
				message_s: {
					required: true,
				}
			};

			//入力項目ごとのエラーメッセージ定義
			var messages = {
				name_s: {
					required: "*名前を入力してください"
				},
				email_s: {
					email: "正しいメールアドレスを入力してください"
				},
				inquiry_s: {
					required: "チェックボックスを選択してください"
				}
			};

			$(function() {
				$('#sfm-form').validate({
					errorElement: "span",

					rules: rules,
					messages: messages,

					//エラーメッセージ出力箇所調整
					errorPlacement: function(error, element) {
						if (element.is(':radio')) {
							error.appendTo(element.parent().parent());
						} else if (element.attr("name") == "zip_s") {
							error.insertAfter(".ad_btn");
						} else if (element.attr("name") == "select_s") {
							error.insertAfter(".select-box");
						} else if (element.attr("name") == "check_s[]") {
							error.insertAfter(".checkbox");
						} else {
							error.insertAfter(element);
						}
					},
					focusInvalid: false,
					invalidHandler: function(form, validator) {
						if (!validator.numberOfInvalids())
							return;

						//　エラーのある箇所へのスクロール
						$('html, body').animate({
							scrollTop: $(validator.errorList[0].element).offset().top - 100
						}, 300);
					}

				});
			});

		})();

		$(function() {
			$('.ad_btn').click(function() {
				AjaxZip3.zip2addr('zip', '', 'address', 'address');
			});
		});
	</script>
</body>

</html>
