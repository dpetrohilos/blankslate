<?php get_header('testimonials'); ?>



<?php
$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 12,
    'order' => 'asc'


);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<article id="testimonials" class="js-scroll v-rhythm">
<div class="testimonials-item testimonials-item-1">

<p class="entry-title heading" itemprop="name"><?php the_title(); ?></p>
<?php edit_post_link(); ?>

<blockquote class="quote-item testimonial"><p class="pull-quote"> <?php the_field('Qoute'); ?><p></blockquote>


<div class="cite flex">
<div><img width="60" height="60" class="image-quote" src="<?php the_field('quote_source_image'); ?>"  alt="Image of <?php the_title_attribute(); ?>"  /></div>

<div>
<p><cite> — <?php the_field('quote-source'); ?>    </cite></p>
</div></div></div>



<div class="featured-image testimonials-item testimonials-item-2 js-scroll v-rhythm">

<?php if ( get_the_post_thumbnail() ) : /* Show the featured image if there is one */ ?>									 
<?php the_post_thumbnail(); ?>
<?php endif; ?>

</div>
</article>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>