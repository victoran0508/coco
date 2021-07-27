<aside class="side-nav">
  <section class="side-category">
    <h3 class="category-ttl">カテゴリー</h3>
    <ul>
      <?php
      if(is_post_type_archive('case') || is_tax('case_cat') || is_singular('case')){
        $args = array(
          'title_li'     => '',
          'taxonomy'     => 'case_cat',
        );
      }else{
        $args = array(
          'title_li'     => '',
        );
      }
      wp_list_categories($args);
      ?>
    </ul>
  </section>
</aside>
</main>
