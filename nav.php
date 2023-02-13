<nav id="menu-bar" role="navigation" >
<button id="menu" aria-expanded="false" aria-controls="menu-list" aria-label=”Open the menu” onclick="onClickMenu()">
<div id="label">Menu</div>
        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>

</button>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'menu_class' => 'nav', 'menu_id' => 'nav', 'container' => 'ul',
		'container_class'      => 'nav',
		'container_id'         => 'nav',

 ) ); ?>
  
</nav>