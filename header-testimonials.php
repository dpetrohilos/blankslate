

<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />

<?php wp_head(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/css/testimonials.css' ?>">

</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<div class="wrapper hidden">

<header id="header" class="flex space-between not-fb container" role="banner">
<div id="menu-bar" role="navigation hidden" >

      <div id="menu" onclick="onClickMenu()">
      <div id="label">Menu</div>

        <div id="bar1" class="bar"></div>
        <div id="bar2" class="bar"></div>
        <div id="bar3" class="bar"></div>
      </div>
      <?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>', 'menu_class' => 'nav', 'menu_id' => 'nav', 'container' => 'ul',
		'container_class'      => 'nav',
		'container_id'         => 'nav',

 ) ); ?>
    </div>

<div id="branding" class="hidden">

<a id="site-logo" href="<?php echo home_url(); ?>" title="link to home">
<svg id="logo" ria-labelledby="Logo_Title_Discription_2" class="desktop" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 203 60"><defs></defs><g><path class="cls-1" d="M40.64,.93H15.77C7.17,.93,.18,7.92,.18,16.52c0,7.15,4.84,13.19,11.42,15.01,0,0,.01,0,0,.02,0,0,0,0,0,0-4.54,11.99-7.71,21.78-9.06,25.56-.31,.88,.32,1.84,1.25,1.84,6.25,0,36.46,0,36.46,0,17.08,.36,29.9-13.62,29.19-30.25-.65-15.36-13.31-27.67-28.82-27.76Zm-13.72,31.17v23.22H7.17c-.42,0-.72-.43-.56-.82,2.39-6.13,6.52-16.78,8.67-22.41m11.63-3.61H15.77c-6.6,0-11.96-5.37-11.96-11.96S9.17,4.55,15.77,4.55h11.15V28.48Zm12.98,26.84h-8.93c-.24,0-.43-.19-.43-.43V5.01c0-.25,.2-.45,.45-.45h9.48c13.85,0,25.15,11.15,25.38,24.95,.24,14.2-11.76,25.82-25.96,25.82Z"/><circle class="cls-1" cx="46.37" cy="30.85" r="1.83"/><circle class="cls-1" cx="17.18" cy="16.51" r="1.83"/></g><g><path class="cls-1" d="M90.16,41.1h-2.36l-3.84-4.36h-2.66v4.36h-2.02v-12.62c1.96,0,3.91,.02,5.87,.02,2.92,0,4.45,2,4.45,4.12,0,1.8-.94,3.56-3.42,3.93l3.76,4.19,.22,.36Zm-8.86-10.77v4.57h3.83c1.67,0,2.41-1.06,2.41-2.25s-.74-2.32-2.4-2.32h-3.85Z"/><path class="cls-1" d="M105.53,41.1h-9.31v-12.6h9.25v1.96h-7.24v3.4h6.95v1.87h-6.95v3.39h7.29v1.98Z"/><path class="cls-1" d="M114.09,37.23v3.87h-2.02v-12.6c1.93,0,3.91-.02,5.83-.02,6.01,0,6.03,8.71,0,8.75h-3.82Zm0-1.85h3.82c3.33,0,3.31-5.04,0-5.04h-3.82v5.04Z"/><path class="cls-1" d="M137.78,41.1h-9.31v-12.6h9.25v1.96h-7.24v3.4h6.95v1.87h-6.95v3.39h7.29v1.98Z"/><path class="cls-1" d="M153.06,38.45h-6.82l-1.19,2.65h-2.14l5.65-12.6h2.2l5.65,12.6h-2.14l-1.21-2.65Zm-3.4-7.83l-2.67,6h5.33l-2.67-6Z"/><path class="cls-1" d="M163.84,30.31h-4.14v-1.82h10.3v1.82h-4.12v10.79h-2.03v-10.79Z"/><path class="cls-1" d="M185.16,41.1h-9.31v-12.6h9.25v1.96h-7.24v3.4h6.95v1.87h-6.95v3.39h7.29v1.98Z"/><path class="cls-1" d="M202.58,41.1h-2.36l-3.84-4.36h-2.66v4.36h-2.02v-12.62c1.96,0,3.91,.02,5.87,.02,2.92,0,4.45,2,4.45,4.12,0,1.8-.94,3.56-3.42,3.93l3.76,4.19,.22,.36Zm-8.86-10.77v4.57h3.83c1.67,0,2.41-1.06,2.41-2.25s-.74-2.32-2.4-2.32h-3.85Z"/><path class="cls-1" d="M81.12,46.09c4.3,0,6.27,3.08,6.32,6.19,.07,3.19-1.91,6.41-6.32,6.41h-4.77v-12.6h4.77Zm-2.77,10.66h2.77c3.08,0,4.38-2.27,4.32-4.48-.05-2.12-1.35-4.25-4.32-4.25h-2.77v8.73Z"/><path class="cls-1" d="M93.81,58.7v-12.6h2v12.6h-2Z"/><path class="cls-1" d="M112.19,48.99c-.9-.88-2.23-1.35-3.4-1.35-2.95,0-4.66,2.21-4.65,4.88,0,2.3,1.37,4.54,4.65,4.54,1.08,0,2.07-.27,3.08-1.12v-2.56h-3.51v-1.8h5.38v5.17c-1.26,1.39-2.83,2.2-4.95,2.2-4.63,0-6.63-3.08-6.63-6.43,0-3.64,2.32-6.73,6.63-6.73,1.67,0,3.37,.63,4.66,1.91l-1.26,1.3Z"/><path class="cls-1" d="M120.27,58.7v-12.6h2v12.6h-2Z"/><path class="cls-1" d="M132.26,47.91h-4.14v-1.82h10.3v1.82h-4.12v10.79h-2.03v-10.79Z"/><path class="cls-1" d="M151.86,56.05h-6.82l-1.19,2.65h-2.14l5.65-12.6h2.2l5.65,12.6h-2.14l-1.21-2.65Zm-3.4-7.83l-2.66,6h5.33l-2.66-6Z"/><path class="cls-1" d="M162.93,46.09v10.73h6.64v1.87h-8.66v-12.6h2.02Z"/></g></svg>
<title id="Logo_Title_Discription_1">Home button</title>

<svg aria-labelledby="Logo_Title_Discription"  id="logo" class="mobile logo-mobile"  xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70.06 60"><defs></defs><path class="cls-1" d="M40.64,.93H15.77C7.17,.93,.18,7.92,.18,16.52c0,7.15,4.84,13.19,11.42,15.01,0,0,.01,0,0,.02,0,0,0,0,0,0-4.54,11.99-7.71,21.78-9.06,25.56-.31,.88,.32,1.84,1.25,1.84,6.25,0,36.46,0,36.46,0,17.08,.36,29.9-13.62,29.19-30.25-.65-15.36-13.31-27.67-28.82-27.76Zm-13.72,31.17v23.22H7.17c-.42,0-.72-.43-.56-.82,2.39-6.13,6.52-16.78,8.67-22.41m11.63-3.61H15.77c-6.6,0-11.96-5.37-11.96-11.96S9.17,4.55,15.77,4.55h11.15V28.48Zm12.98,26.84h-8.93c-.24,0-.43-.19-.43-.43V5.01c0-.25,.2-.45,.45-.45h9.48c13.85,0,25.15,11.15,25.38,24.95,.24,14.2-11.76,25.82-25.96,25.82Z"/><circle class="cls-1" cx="46.37" cy="30.85" r="1.83"/><circle class="cls-1" cx="17.18" cy="16.51" r="1.83"/></svg>
<title id="Logo_Title_Discription">Home button</title>



</a>

</div>





</header>
