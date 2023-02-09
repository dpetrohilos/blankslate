<?php
$args = array(
        'post_type' => 'portfolio',
        'order' => 'asc',
        'orderby' => 'date',
    
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<main id="potfolio-wrapper" class="full-bleed js-scroll v-rhythm">
<section id="portfolio" class="folio-item folio-item-2 folio-body">
<div id="panel-<?php the_field('Number'); ?>" class="flex-item flex-item-1 js-scroll slide-left panel js-list-item">

<p class="number"><?php the_field('Number'); ?></p>

<p class="heading"><a class="highlight" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
<p class="sub-heading"> <?php the_field('Subtitle'); ?>    </p>

<div class="excerpt"><?php the_excerpt(); ?>
</div>
<a class="button" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View Work</a>

</div>




<div class="flex-item flex-item-2  js-scroll slide-right portfolio-image-wrapper">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if ( get_the_post_thumbnail() ) : /* Show the featured image if there is one */ ?>
<?php the_post_thumbnail(); ?></a>
</div>

</section>
</main>

<?php endif; ?>
<?php endwhile; ?>




<?php wp_reset_postdata(); ?>
<?php endif; ?>