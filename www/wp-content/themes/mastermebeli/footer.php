<footer class="footer">
 <div class="footer__align">
  <div class="footer__item">
   ИП Гвоздь А.В.<br>
   УНП 690856965<br>
   <a href="#confident">политика конфиденциальности</a><br>
  </div>
  <adress class="footer__item">
   Звонки принимаем с 8:00-20:00, без выходных<br>
   <?php echo strip_tags(trim(category_description(6)));?><br>
   <?php echo strip_tags(trim(category_description(7)));?><br>
   <?php echo strip_tags(trim(category_description(13)));?><br>
   <?php echo strip_tags(trim(category_description(9)));?>
  </adress>
  <div class="footer__item">
   © nagel-mebel.by<br>
   2006-2018<br>
   <a href="http:\\nayan.by">агенство nayan</a><br>
  </div>
 </div>
</footer>
</div>
</div>
<script>
 function validatephone(input){
  var validator = /^\d+$/;
  if (validator.test(input.value) === true) 
   input.setCustomValidity(""); 
  else 
   input.setCustomValidity("Укажите номер в числовом формате");   
  }
 </script>
 <script>
  var h_hght = $(".top-line").outerHeight();
  var h_mrg = 0;
  $(function(){
   var elem = $('#menu');
   var top = $(this).scrollTop();    
   if(top < h_hght)
    elem.css('top', h_hght-top);
   else 
    elem.css('top', h_mrg);
   $(window).scroll(function(){
    top = $(this).scrollTop();     
    if (top+h_mrg < h_hght) 
     elem.css('top', (h_hght-top));
    else 
     elem.css('top', h_mrg);
   });
  });
  $(window).resize(function(){
   var top = $(this).scrollTop(); 
   h_hght = $(".top-line").outerHeight();
   if(top < h_hght){
    h_mrg = 0;
    var elem = $('#menu');
    elem.css('top', h_hght-top);
   }   
  });
 </script>
 <?php wp_footer();?>
</body>
</html>