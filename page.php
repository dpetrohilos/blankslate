<?php get_header('page'); ?>
</div>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div id="black-page-first" class="black-page-first black-wrapper v-rhythm">
<section id="post-<?php the_ID(); ?>" <?php post_class('v-rhythm'); ?>>
<header>
<h1 class="entry-title site-title" itemprop="name"><?php the_title(); ?></h1></header>
</section>
<div>


</div></div> <!--- end wrapper!---> 
</div>
<section id="black-page-second" class="black-page-second black-wrapper grid  js-scroll fade-in"><div>
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?></div>
<article><p class=" js-scroll fade-in"><?php the_field('intro-paragraph'); ?></p></article>
</section>

<section id="black-page-third" class="v-rhythm grid js-scroll fade-in wrapper black-page-third" itemprop="mainContentOfPage">

<article class="entry-content content  js-scroll fade-in"><?php the_content(); ?> <?php edit_post_link(); ?></article>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</article>

</section>

<div id="black-page-fourth" class="black-page-fourth black-wrapper v-rhythm js-scroll fade-in">
<section id="services" class="grid wrapper">
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
<?php get_footer(); ?>