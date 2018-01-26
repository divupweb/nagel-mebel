<?php
 if(!isset($_GET['page'])) 
  $page = 'main';
 else
  $page = addslashes(strip_tags(trim($_GET['page'])));
?>
<?php get_header();?>
  <div class="valid-align">
   <div class="page-align">
    <div id="uper" class="top-line">
   	 <div class="site-name">
   	  <?php bloginfo('name');?>
   	 </div>
   	 <a href="#win1">Online - Консультация</a>
   	 <div class="tel-top">
      <img src="<?php bloginfo("template_directory");?>/design/icons/mts.png" height="11" width="17">8 (029) 649-26-21<br>
   	  <img src="<?php bloginfo("template_directory");?>/design/icons/vel.png" height="11" width="17">8 (033) 608-15-87
   	 </div>
    </div>
    <?php  include ('modules/'.$page.'.php');?>
    <?php get_footer();?>