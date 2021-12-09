<?php get_header(); ?>
<main>
  <h1>Latest Articles</h1>
  <div class="contents">
   <?php  
      if(have_posts()):
        while(have_posts()):
          the_post(); ?>
            <div class="box2">
                <img src="" alt=""><?php the_post_thumbnail(); ?>
                <p class="dates"><?php echo get_the_date(); ?></p>
                <p class="text"><?php the_title(); ?></p>
                 <div class="btn_box">
                    <p class="read"><a href="<?php the_permalink(); ?>">READ MORE</a></p>
                    <span></span>
                    </div>
            </div>
        <?php endwhile;
      else : ?>
        <p>表示する記事がありません</p>
    <?php endif;?>
  </div>
</main>
<?php get_footer(); ?>
