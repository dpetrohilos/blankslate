<?php
$args = array(
        'post_type' => 'portfolio',
        'order' => 'asc',
        'orderby' => 'date',
    
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<article id="potfolio-wrapper-<?php the_field('Number'); ?>" class="full-bleed js-scroll fade-in-bottom v-rhythm potfolio-wrapper">
<section id="portfolio-list-<?php the_field('Number'); ?>" class="portfolio">
<div id="panel-<?php the_field('Number'); ?>" class="flex-item flex-item-1 js-scroll fade-in-bottom panel js-list-item">

<p class="number"><?php the_field('Number'); ?></p>

<h2 class="heading"><a class="highlight" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
<p class="sub-heading"> <?php the_field('Subtitle'); ?>    </p>

<div class="excerpt"><?php the_excerpt(); ?>
</div>
<a class="button button-1 btn-left" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">View Work</a>
<a class="button button-2 .btn-left" href="/#portfolio-list-<?php the_field('number+'); ?>" title="<?php the_title_attribute(); ?>">Next Item</a>


</div>




<div class="flex-item flex-item-2 js-scroll fade-in-bottom">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><?php if ( get_the_post_thumbnail() ) : /* Show the featured image if there is one */ ?>
<?php the_post_thumbnail(); ?></a>
</div>

</section>
</article>

<?php endif; ?>
<?php endwhile; ?>




<?php wp_reset_postdata(); ?>
<?php endif; ?>