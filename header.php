<!-- HTMLコード -->
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Script-Type" content="text/javascript" />
	<meta http-equiv="Content-Style-Type" content="text/css" />
    <?php wp_head(); ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" />

    <!-- css -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/libs/slick/slick-theme.css">

    <!-- javascript -->
    <script src="<?php echo get_template_directory_uri(); ?>/libs/jquery/jquery-3.4.1.min.js"></script>
</head>

<body>
    <header class="page-header">
        <div class="header-inner">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <span>アートメイクは東京都港区麻布十番のココクリニック</span>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" />
            </a>
            <a href="javascript:void(0)" class="nav-open"><i></i><span></span></a>
            <div class="nav-wrapper">
                <ul class="navs">
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#reasons">選ばれる理由</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#staff1">施術者紹介</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#price-table">料金表</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/column">アートメイク症例紹介</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#access">アクセス</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#contact">ご予約・お問い合わせ</a></li>
                    <li class="item"><a href="<?php echo get_home_url(); ?>/#news">NEWS</a></li>
                    <li class="item"><a href="https://www.instagram.com/cococlinic_official/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a></li>
                </ul>
            </div>
            <div class="clinic-info">
				<div class="text-info">
					<p class="text">
						診療時間　10:00～19:00<br>
						第2、第4日曜日・祝日は10:00-15:00<br>
						東京都港区麻布十番3-10-1デルプレシアード4階
					</p>
				</div>
				<div class="contact-links">
					<div class="sns-icons">
						<a href="https://www.instagram.com/cococlinic_official/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
						<a href="https://line.me/R/ti/p/%40586yzheo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lineapp.png"></a>
					</div>
					<a class="phone-number" href="tel:0362751866">03-6275-1866</a>
				</div>
			</div>
        </div>
    </header>