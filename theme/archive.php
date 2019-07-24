<?php get_template_part('header'); ?>
<div class="page page-archive">
    <!-- <section class="archive-posts">
      <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post(); ?>
          <a href="<?php the_permalink(); ?>" class="archive-post">
            <div class="archive-post-image">
              <?php responsive_img(get_post_thumbnail_id(), 'medium'); ?>
            </div>
            <div class="archive-post-title">
              <h3><?php the_title(); ?></h3>
            </div>
            <article class="archive-post-desc">
              <p><?php the_field('summary'); ?></p>
            </article>
          </a>
        <?php endwhile; ?>
      <?php else: ?>
        <p>There are no posts available</p>
      <?php endif; ?>
    </section> -->
</div>
<?php get_template_part('footer'); ?>