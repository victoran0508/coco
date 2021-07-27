<?php
/**
 * 投稿を表示するショートコード
 * 引数にカテゴリ－スラッグ、引数がなければ処理しない
 *
 * @param string $attr カテゴリースラッグ、[show_post cat=cat_name]
 * @return 投稿リスト
 */
function show_post_func($attr) {
	if(isset($attr['cat'])){
		$cat_name = $attr['cat'];
	}else{
		return false;
	}

	$args = array(
		'posts_per_page'	 => 3,
		'category_name'  	=> array($cat_name),
	);
	$the_query = new WP_Query( $args );
	if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

	$post_id = $the_query->post->ID;
	$thumb_url = get_the_post_thumbnail_url($post_id, 'medium');
	$post_content = apply_filters('the_content', $the_query->post->post_content);

	$output .= '
	<div class="rob bottom-mg-20">';
	if($thumb_url){
		$output .= '<figure class="coll-5 text-center bottom-mg-20">
						<img src="'.esc_url($thumb_url).'" alt="">
					</figure>';
	}
	$output .= '<div class="coll-7">
			<p class="font01 fo16 lh14 bottom-mg-20">'.get_my_excerpt(get_the_title($post_id), 48).'</p>
			<p class="bottom-mg-20">'.get_my_excerpt($post_content, 160).'</p>
			<p class="more-btn"><a href="'.get_permalink($post_id).'">続きを読む</a></p>
		</div>
	</div>';

	endwhile;
	endif;
	wp_reset_postdata();

	return $output;
}
add_shortcode( 'show_post', 'show_post_func' );
