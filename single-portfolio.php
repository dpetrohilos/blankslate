<?php get_header('portfolio'); ?>

</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('portfolio-first-level portfolio-wrapper'); ?>>
<div class="cover-image grid-item grid-item-1">
<img src="<?php the_field('cover-image'); ?>" alt="<?php the_field('cover-image-alt'); ?>">
</div>
<div class="post-content content grid-item grid-item-2">
<h1 class="entry-title heading" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
<h2 class="sub-heading"><?php the_field('Subtitle'); ?></h2>

<div itemprop="mainContentOfPage">
<?php the_content(); ?>
</div>
</div>

</article>

<section class="portfolio-second-level js-scroll fade-in-bottom portfolio-wrapper">
<div class="js-scroll fade-in-bottom portfolio-second-item">
<img src="<?php the_field('secondary-image'); ?>" alt="<?php the_field('secondary-image-alt'); ?>" />
</div>

<aside class="background js-scroll fade-in-bottom portfolio-second-item">
<p><strong>Work: </strong><?php the_field('aside-heading'); ?> <br></p> 
<p><?php the_field('aside-fonts'); ?></p>
<p><?php the_field('aside-message'); ?></p>
</aside>

</section>

<section class="portfolio-third-level content js-scroll fade-in-bottom portfolio-wrapper"> 

<div>
<img src="<?php the_field('tertiary-image'); ?>"  alt="Image of <?php the_field('tertiary-image-alt'); ?>"  />
</div>

<div>
<img src="<?php the_field('quaternary-image'); ?>"  alt="Image of <?php the_field('quaternary-image-alt'); ?>"  />
</div>

<aside class="pull-quote js-scroll fade-in-bottom portfolio-second-item">

<blockquote class="quote-item testimonial"><p class="pull-quote"> <?php the_field('quote-text'); ?><p></blockquote>
<div class="cite flex">
<div><img width="60" height="60" class="image-quote" src="<?php the_field('quote_source_image'); ?>"  alt="Image of <?php the_title_attribute(); ?>"  /></div>
<div>
<p><cite class="citation"> — <?php the_field('quote-source'); ?>    </cite></p>
</div></div>
</aside>


</section>

<section class="portfolio-fourth-level content js-scroll fade-in-bottom portfolio-wrapper"> 

<div class="grid-item-1 grid-item">
<img src="<?php the_field('quinary-image'); ?>"  alt="Image of <?php the_field('quinary-image-alt'); ?>"  />

</div>

<div class="grid-item-2 grid-item">
<?php the_field('bottom-text'); ?>

</div>



</section>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
<?php get_footer(); ?>