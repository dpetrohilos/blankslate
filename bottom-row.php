
<?php if ( is_active_sidebar( 'primary-widget-area' ) ) : ?>
<aside id="services" class="grid js-scroll fade-in-bottom" role="complementary">


<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'primary-widget-area' ); ?>
</ul>

</div>

<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'second-widget-area' ); ?>
</ul>

</div>

<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'third-widget-area' ); ?>
</ul>

</div>

<div class="widget-area">
<ul class="xoxo">
<?php dynamic_sidebar( 'fourth-widget-area' ); ?>
</ul>

</div>

<?php endif; ?>

</aside>