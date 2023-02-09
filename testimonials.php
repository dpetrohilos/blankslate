<div class="wrapper bg-white">
<section id="third-row" class="grid js-scroll fade-in-bottom bg-white">

<div class="grid-item-1 grid-item v-rhythm">
<h4>What Are People Saying</h4>
<?php
$args = array(
    'post_type' => 'testimonials',
    'posts_per_page' => 1,
    'orderby' => 'rand', 
    'order' => 'asc',
);
$the_query = new WP_Query( $args ); ?>

<?php if ( $the_query->have_posts() ) : ?>


<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

<blockquote class="quote-item testimonial"><p class="pull-quote"> <?php the_field('Qoute'); ?><p></blockquote>


<div class="cite flex">
<div><img width="60" height="60" class="image-quote" src="<?php the_field('quote_source_image'); ?>"  alt="Image of <?php the_title_attribute(); ?>"  /></div>
<div>
<p><cite> — <?php the_field('quote-source'); ?>    </cite></p>
</div></div>

<div>
<a href="/testimonials" class="quote item button center" >More Testimonials</a> 
</div>






<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

</div>

<div id="work" class="work js-scroll slide-right v-rhythm"> <div class="work-item work-item-1">
<h5>
Past Partners  
</h5></div>
<div class="work-item work-item-2">
<ul class="work-logos js-scroll slide-right">
<li>
<img height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-1.png" alt="Nat Geo" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-2.png" alt="Movement Media" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-3.png" alt="Google" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-4.png" alt="Center For American Progress" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-5.png" alt="Democracy Collaborative" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-6.png" alt="People For The American Way" class="brand-image">
</li>
<li>
<img  height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-7.png" alt="UCLA" class="brand-image">
</li>
<li>
<img height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-8.png" alt="Women's March" class="brand-image">
</li>
<li>
<img height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-9.png" alt="DC Action Lab" class="brand-image">
</li>
<li>
<img  height="200" width="200"src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-10.png" alt="Pion" class="brand-image">
</li>

<li>
<img height="200" width="200" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/brands/logo-12.png" alt="Three Air" class="brand-image">
</li>
</ul>
</div>
</div> 

</section>



<section id="services" class="grid wrapper js-scroll fade-in-bottom">



<div>
<p class="sub-heading">We Work In</p>
<ul>
    <li>Wordpresss</li>
    <li>Drupal</li>
    <li>Webflow</li>
    <li>Action Network</li>
    <li>Hubspot</li>

</ul>
</div>

<div>
<p class="sub-heading">We Can Provide You With</p>
<ul>
    <li>Art Direction</li>
    <li>Brand Strategy</li>
    <li>Social Media Strategy</li>
    <li>Custom Wordpress Theming</li>
    <li>Conversion Rate Optimization</li>
</ul>

</div>

<div>
<p class="sub-heading">We Can Launch Your</p>
<ul>
    <li>Pitch Decks</li>
    <li>White Paper</li>
    <li>Social Media Campaigns</li>
    <li>Digital Marketing Campaigns</li>
    <li>SEO Campaigns</li>

</ul>
</div>


</section>

</div>