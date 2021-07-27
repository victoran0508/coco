<?php

function top_topics_list($the_query)
{
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

    $post_id = $the_query->post->ID;

    // $cat_arr = get_the_category($post_id);
    $post_content = apply_filters('the_content', $the_query->post->post_content);

	$output .= '
		<li>
			<time datetime="'.get_the_time('c', $post_id).'">'.get_the_time('Y.m.d', $post_id).'</time>
			<a href="'.get_permalink($post_id).'">'.get_the_title($post_id).'</a>
		</li>
	';

    endwhile;
	else:
		$output = '<p>まだ投稿がありません</p>';
	endif;
    wp_reset_postdata();
	return $output;
}


function top_column_list($the_query)
{
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

    $post_id = $the_query->post->ID;

	$thumb_url = get_the_post_thumbnail_url($post_id, 'medium');
	if(!$thumb_url){
		$thumb_url = get_template_directory_uri().'/images/no_images.jpg';
	}

    // $cat_arr = get_the_category($post_id);
    $post_content = apply_filters('the_content', $the_query->post->post_content);

	$output .= '
	<li>
		<a href="'.get_permalink($post_id).'">
			<figure class="list-img"><img src="'.esc_url($thumb_url).'" alt="ココクリニック"></figure>
			<div class="list-desc">
				<h4 class="list-ttl">'.get_my_excerpt(get_the_title($post_id), 82).'</h4>
			</div>
		</a>
	</li>

	';

    endwhile;
	else:
		$output = '<p>まだ投稿がありません</p>';
	endif;
    wp_reset_postdata();
	return $output;
}

function top_blog_list($the_query)
{
    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

    $post_id = $the_query->post->ID;

    $post_content = apply_filters('the_content', $the_query->post->post_content);

	$thumb_url = get_the_post_thumbnail_url($post_id, 'medium');

	$output .= '
    	<li><a href="'.get_permalink($post_id).'">
    		<span class="time">'.get_the_time('Y.m.d', $post_id).'</span>
    		<h3>'.get_my_excerpt(get_the_title($post_id), 50).'</h3>
    		<span class="ttl">'.get_my_excerpt($post_content, 60).'</span>
    	</a></li>
	';

    endwhile;
	else:
		echo '<p>まだ投稿がありません</p>';
	endif;
    wp_reset_postdata();
}
