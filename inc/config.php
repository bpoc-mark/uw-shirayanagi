<?php include($_SERVER['DOCUMENT_ROOT'] . "/inc/common.php");

$val = $_COOKIE["switchScreen"];

/*=====================================================

	サイト情報

=====================================================*/

//サイトURL統一
if ($_SERVER['HTTPS'] == "on") {
	$PROTOCOL = "https://";
} else {
	$PROTOCOL = "http://";
}
define("CANONICAL", $PROTOCOL . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI']);


//サイト名
define("SITE_NAME", "（株）白柳一級建築設計事務所");

//キーワード
define("KEY_WORD", "建築設計,設計事務所,浜松,一級建築士,構造設計,設備設計");

//ディスクリプション
define("DESCRIPTION", "浜松市等で官公庁、工場、各種民間施設、住宅の建築設計監理を主な業務として外注でない自社の専任技術者に依る免震、制震、耐震構造設計で充分な安全性を確保し意匠、建築デザインに優れた設計監理業務をおこなっています。");

//H1文言
define("SEO_WORDS", "");
