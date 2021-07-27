<?php
function page_title() {
    if (function_exists('disp_page_title')) {
        disp_page_title('normal', 'custom', 'column');
    }
}
add_action('page_title', 'page_title');

get_header();

// $cat_all = show_select_box_category('qa_cat');

?>

	<main class="page-wrapper">
        <section class="section section--menus">
            <div class="section__content">
                <ul class="top-menu">
                    <li class="item">
                        <a class="menu">選ばれる理由</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#">スタッフ1</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">スタッフ2</a>
							</li>
						</ul>
                    </li>

					<li class="item">
						<a class="menu">施術者紹介</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#">アイブロウ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">アイライン</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">アイブロウ・アイラインセット</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">その他部位</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">ペアプラン</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">料金表</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#">アイブロウ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">アイライン</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">アイブロウ・アイラインセット</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">その他部位</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">ペアプラン</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">アートメイク症例紹介</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#">LINE</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">HPからお問い合わせ</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">アクセス</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="#">新着情報</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="#">ブログ</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu" href="#">ご予約・お問い合わせ</a>
					</li>

					<li class="item">
						<a class="menu" href="#">NEWS</a>
					</li>
                </ul>
                <div class="sns-links">
                    <a class="menu" href="#"><img src="./assets/img/instagram.png"></a>
                    <a class="menu" href="#"><img src="./assets/img/lineapp.png"></a>
                </div>
            </div>
        </section>

        <section class="section section--title">
            <h1 class="section__title">
                <span>COLUMN</span>アートメイク症例
            </h1>
        </section>

        <section class="section section--breadcrumb">
            <div class="section__content">
                <a href="<?php echo get_home_url(); ?>/">HOME</a>
                <span>アートメイク症例</span>
            </div>
        </section>

        <section class="section section--bloglist">
            <div class="section__content">
                <!-- <div class="sidebar">
                    <span class="category">CATEGORY</span>
                    <div class="select-panel">
                        <select class="category-select">
                            <option>Select</option>
                        </select>
                    </div>
                    <ul class="category-list">
                        <li class="item">
                            <a href="#">テキスト挿入（１）</a>
                        </li>
                    </ul>
                </div> -->

                <div class="main-area">
                    <ul class="article-list">
						<?php
							if (have_posts()):
								while (have_posts()):
									the_post();

								$thumb_url = get_the_post_thumbnail_url($post->ID, 'medium');
								if (!$thumb_url) {
									$thumb_url = get_template_directory_uri().'/assets/img/no_images.jpg';
								}

								$post_content = apply_filters('the_content', $post->post_content);

						?>

                        <li class="item">
                            <div class="article">
								<a href="<?php the_permalink(); ?>" class="article__link"></a>
                                <figure class="figure">
                                    <img class="img" src="<?php echo esc_url($thumb_url);?>" alt="ココクリニック">
                                </figure>
                                <p class="info">
                                    <time><?php the_time('Y/m/d'); ?></time>
                                    <?php echo get_my_excerpt(get_the_title(), 84); ?>
                                </p>
                            </div>
                        </li>

						<?php
								endwhile;
							else:
						?>
						<p>現在、表示する内容はありません。</p>
						<?php
							endif;
						?>

                    </ul>

                    <?php echo cms_pagination();?>
                </div>
            </div>
        </section>

        <section class="section section--fixed-bottom">
            <div class="section__content">
                <div class="links">
                    <a class="link" href="#">
                        <span>Tel</span>
                    </a>
                    <a class="link" href="#">
                        <span>Instagram</span>
                    </a>
                    <a class="link" href="#">
                        <span>Line</span>
                    </a>
                </div>
            </div>
        </section>
    </main>

<?php
// get_sidebar();
get_footer();
