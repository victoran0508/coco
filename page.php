<?php
function page_title() {
    if (function_exists('disp_page_title')) {
        disp_page_title('normal', 'page');
    }
}
add_action('page_title', 'page_title');

get_header();?>
		<?php
		if (have_posts()) : while (have_posts()) : the_post();

		the_content();

	endwhile;
	else:
		?>
		<p>指定された投稿は見つかりませんでした</p>
	<?php endif; ?>
<?php
// get_sidebar();
get_footer();
