<?php 
require_once( $_SERVER['DOCUMENT_ROOT'] . '/wp-load.php' );
?>
<script>
 $("#content img").wrap("<div class=\"img-block\"></div>");
 jQuery(function($) {
  newsImg = $("#content img");
  newsImg.after(function(){
   imgTitle = $(this).attr("title");
   if (imgTitle) $(this).parent().append('<div class="img-txt">'+imgTitle+'</div>');
  });
 });
</script>
<script type="text/javascript">
(function(){
$("#content a").attr('rel','simplebox');
var boxes=[],els,i,l;
if(document.querySelectorAll){
els=document.querySelectorAll('a[rel=simplebox]');	
Box.getStyles('simplebox_css','<?php bloginfo("template_directory");?>/css/simplebox.css');
Box.getScripts('simplebox_js','<?php bloginfo("template_directory");?>/js/simplebox.js',function(){
simplebox.init();
for(i=0,l=els.length;i<l;++i)
simplebox.start(els[i]);
simplebox.start('a[rel=simplebox_group]');			
});
}
})();</script>
<div id="loaded">
<?php
 global $wpdb;
 $result = $wpdb->get_results("SELECT post_content FROM $wpdb->posts WHERE id='57'");
 if( $result )
 foreach( $result as $post )
 {
  echo "$post->post_content";
 }
?>
<div class="clr"></div>
Хочу такую модель
</div>