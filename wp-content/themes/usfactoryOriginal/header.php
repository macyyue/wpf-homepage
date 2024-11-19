<?php

/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package usfactory
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-2LDVC6FWFE"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-2LDVC6FWFE');
</script>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=1000px">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="icon" href="/common/img/Usfactory_Mark_500px.png" type="image/x-icon">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="stylesheet" href="/common/css/general.css" media="screen">
	<link rel="stylesheet" href="/common/css/index.css" media="screen">
	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jqusery.min.js?ver=1.8.3'></script>
	<script type="text/javascript" src="/common/js/script.js"></script>
	<script type="text/javascript" src="/common/js/common.js"></script>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<script type="text/javascript" src="/common/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
	<script type="text/javascript" src="/common/fancybox/source/jquery.fancybox.js?v=2.1.4"></script>
	<link rel="stylesheet" type="text/css" href="/common/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	<link rel="stylesheet" type="text/css" href="/common/fancybox/source/jquery.fancybox.css?v=2.1.4" media="screen" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-xX1GsaxQIz0GzEAB7fMCI7Q4VQ0pUsk/AXouo2RPWaHimaw9ViKhKHFTD2Y0++PmV+u2h2CkaIexiYnAsZt7EQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script type="text/javascript">
		$(document).ready(function() {
			/*
			 *  Simple image gallery. Uses default settings
			 */

			$('.fancybox').fancybox();

			/*
			 *  Different effects
			 */
		});
	</script>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<script>
		(function(i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function() {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
				m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-63929903-1', 'auto');
		ga('send', 'pageview');
	</script>
	<article id="all_container">
		<p class="discription"><span>ゼネコン・サブコン様における熟練技術者不足の問題を解決する会社</span></p>
		<header>
			<div id="hdr_container" class="clearfix">
				<div id="logo">
					<h1><a href="<?php echo esc_url(home_url('/')); ?>"><img src="/common/img/logo.png" width="200" height="40" alt=""></a></h1>
					<!-- /#hdr_si_logo -->
				</div>
				<p class="tel"><a href="https://lms.us-factory.jp/mypage/login"><img src="/common/img/loginBtn.png" width="130" height="30" alt=""></a></p>

				<!-- /#hdr_container -->
			</div>


			<nav id="gnav">
				<ul id="dMenu" class="mainNav dropmenu">
					<li class="gnav01"><a href="/robot/">
							<!-- <img src="/common/img/gnav01.png" width="210" height="25" alt=""> -->
							<span>Info360</span>
						</a>
						<ul class="droptext">
							<li><a href="/robot/">商品説明</a></li>
							<li><a href="/wp-content/uploads/pdf/info360.pdf" target="_blank">パンフレット</a></li>
							<li><a href="/inquiry/">問い合わせ</a></li>
						</ul>
					</li>
					<li class="gnav02"><a href="/biforac/">
							<!-- <img src="/common/img/gnav02.png" width="160" height="25" alt=""> -->
							<span>BI for AC</span>
						</a>
						<!-- <ul class="droptext">
							<li><a href="/bi/">商品説明</a></li>
							<li><a href="/inquiry/">問い合わせ</a></li>
							<li><a href="https://lms.us-factory.jp/mypage/login">ログイン</a></li>
						</ul> -->
					</li>
					<li class="gnav03"><a href="/news/">
							<!-- <img src="/common/img/gnav03.png" width="75" height="25" alt=""> -->
							<span>NEWS</span>
						</a></li>
					<li class="gnav04"><a href="/media/">
							<!-- <img src="/common/img/gnav04.png" width="160" height="25" alt=""> -->
							<span>実績・メディア掲載</span>
						</a>
						<ul class="droptext">
							<li><a href="/pdf" target="_blank">パンフレット</a></li>
						</ul>
					</li>
					<li class="gnav05"><a href="/company/">
							<!-- <img src="/common/img/gnav05.png" width="85" height="25" alt=""> -->
							<span>会社概要</span>
						</a></li>
					<li class="gnav06"><a href="/access/">
							<!-- <img src="/common/img/gnav06.png" width="85" height="25" alt=""> -->
							<span>アクセス</span>
						</a></li>
					<li class="gnav06"><a href="/recruit/">
							<!-- <img src="/common/img/gnav07.png" width="85" height="25" alt=""> -->
							<span>採用情報</span>
						</a></li>
					<li class="gnav07"><a href="/inquiry/">
							<!-- <img src="/common/img/inquiry.png" width="120" height="25" alt=""> -->
							<span>お問い合わせ</span>
						</a></li>
					<li class="gnav08"><a href="/infrequest/">
						<span>資料請求</span></a>
					</li>
				</ul>
				<!-- /#gnav -->
			</nav>

		</header>