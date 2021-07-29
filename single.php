<?php
$post_type = get_post_type();
function page_title() {
    if (function_exists('disp_page_title')) {
		global $post_type;
		if($post_type === 'post'){
			disp_page_title('normal', 'single');
		}else{
			disp_page_title('normal', 'custom', $post_type);
		}
    }
}
add_action('page_title', 'page_title');

get_header();

if (have_posts()) : while (have_posts()) : the_post();
$cat_arr = get_the_category();

?>

	<main class="page-wrapper">
		<section class="section section--menus">
            <div class="section__content">
                <ul class="top-menu">
                    <li class="item">
                        <a class="menu" href="<?php echo get_home_url(); ?>#reasons">選ばれる理由</a>
                    </li>

					<li class="item">
						<a class="menu">施術者紹介</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#staff1">スタッフ1</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#staff2">スタッフ2</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">料金表</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#eyebrow">アイブロウ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#eyeline">アイライン</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#setplan">アイブロウ・アイラインセット</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#lip">リップ</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#other">その他部位</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#pairplan">ペアプラン</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu" href="<?php echo get_home_url(); ?>/column">アートメイク症例紹介</a>
					</li>

					<li class="item">
						<a class="menu" href="<?php echo get_home_url(); ?>#access">アクセス</a>
					</li>

					<li class="item">
						<a class="menu">ご予約・お問い合わせ</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#line">LINE</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#contact-form">HPからお問い合わせ</a>
							</li>
						</ul>
					</li>

					<li class="item">
						<a class="menu">NEWS</a>
						<ul class="sub">
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#news">新着情報</a>
							</li>
							<li class="subitem">
								<a class="inner-link" href="<?php echo get_home_url(); ?>#blog">ブログ</a>
							</li>
						</ul>
					</li>
                </ul>
                <div class="sns-links">
                    <a class="menu" href="https://www.instagram.com/cococlinic_official/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/instagram.png"></a>
                    <a class="menu" href="https://line.me/R/ti/p/%40586yzheo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/lineapp.png"></a>
                </div>
            </div>
        </section>

		<!-- section class="section section--title">
            <h1 class="section__title">
				<span><?php the_title(); ?></span>
            </h1>
		</section -->

        <section class="section section--breadcrumb">
            <div class="section__content">
                <a href="<?php echo get_home_url(); ?>/">HOME</a>
				<?php
				if ($post_type === 'post') {
				?>
				<a href="<?php echo get_home_url(); ?>/category/<?php echo $cat_arr[0]->slug; ?>"><?php echo $cat_arr[0]->cat_name; ?></a>
				<?php
				} else {
				?>
				<a href="<?php echo get_home_url(); ?>/column">アートメイク症例</a>
				<?php
				}
				?>
                <span><?php the_title(); ?></span>
            </div>
        </section>

		<section class="section section--article">
			<div class="section__content">
				<article class="article">
					<h1><?php the_title();?></h1>
					<time datetime="<?php the_time('c');?>"><?php the_time('Y.m.d');?></time>
					<div class="postdata">
						<?php the_content();?>
					</div>
					<div class="links">
						<?php
						if($post_type === 'post'){
							next_post_link('%link', '&lt;', true);
							echo '<a class="link" href="'.link_by_term($cat_arr[0], 'category').'">一覧へ</a>';
							previous_post_link('%link', '&gt;', true);
						}else{
							next_post_link('%link', '&lt;');
							echo '<a class="link" href="'.link_by_path($post_type, 'custom').'">一覧へ</a>';
							previous_post_link('%link', '&gt;');
						}
						?>
					</div>
				</article>
			</div>
		</section>

		<section class="section section--fixed-bottom">
			<div class="section__content">
				<div class="links">
					<a class="link" href="tel:0362751866">
						<span>Tel</span>
					</a>
					<a class="link" href="https://www.instagram.com/cococlinic_official/">
						<span>Instagram</span>
					</a>
					<a class="link" href="https://line.me/R/ti/p/%40586yzheo">
						<span>Line</span>
					</a>
				</div>
			</div>
		</section>
	</main>

<?php
    endwhile;
    else:
		echo '<p>投稿する内容がありません</p>';
	endif;

	// get_sidebar();
	get_footer();
?>
