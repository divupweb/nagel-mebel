<?php get_header();?>
  <div class="valid-align">
   <div class="page-align">
   <header id="uper" class="top-line">
    <h2 class="top-line__title"><a href="/index.php"><?php bloginfo('name');?></a></h2>
    <div class="top-line__right-side">
      <div class="top-line__contacts">
       <img src="<?php bloginfo("template_directory");?>/design/icons/vel.png" height="11" width="17"><?php echo strip_tags(trim(category_description(6)));?><br>
       <img src="<?php bloginfo("template_directory");?>/design/icons/mts.png" height="11" width="17"><?php echo strip_tags(trim(category_description(7)));?><br>
       <img src="<?php bloginfo("template_directory");?>/design/icons/life.png" height="11" width="17"><?php echo strip_tags(trim(category_description(13)));?>
      </div>
      <div class="top-line__button"><a href="/#feedback">Online - Консультация</a></div>
     </div>
   </header>
    <div class="clr"></div>
    <nav id="menu" class="block-menu" onClick="hide_show()" >
     <div class="block-menu__button">4</div>
     <ul>
      <li><a href="/index.php">Главная</a></li>
      <li><a href="/catalog#kyxni">Каталог</a></li>
      <li><a href="/information">Информация</a></li>
      <li><a href="/feed-back">Отзывы</a></li>
     </ul>
    </nav>
    <div class="clr"></div>
	<div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">
	  <?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_format(), the_post_thumbnail());
      endwhile;?>
     </main><!-- #main -->
	</div><!-- #primary -->
  <?php
   get_footer();