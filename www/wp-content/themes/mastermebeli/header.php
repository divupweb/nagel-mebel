<!doctype html>
<html>
 <head>
  <base href="http://nagel-mebel.by/" />
  <meta content="minsk" name="city"></meta>
  <link rel="icon" href="<?php bloginfo("template_directory");?>/design/icons/m-m.png" type="image/x-icon" />
  <link rel="shortcut icon" href="<?php bloginfo("template_directory");?>/design/icons/m-m.png" type="image/x-icon" />
  <link href="<?php bloginfo("template_directory");?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-type" content="text/html; charset=UTF-8">
  <meta name="format-detection" content="telephone=no"/>
  <script src="<?php bloginfo("template_directory");?>/js/jquery.min.js"></script>
  <script src="<?php bloginfo("template_directory");?>/js/bootstrap.min.js"></script>
  <script src="<?php bloginfo("template_directory");?>/js/common.js"></script>
  <script type="text/javascript" src="<?php bloginfo("template_directory");?>/js/simplebox_util.js"></script>
  <?php wp_head();?>
   <title>Nagel-Mebel Кухни Шкафы-купе под заказ в Минске не дорого.</title>
   <style>
    @font-face {
     font-family:Angry;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_1.eot);
      src:url(<?php bloginfo("template_directory");?>/fonts/font_1.eot?#iefix)format("embedded-opentype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_1.woff)format("woff"),
          url(<?php bloginfo("template_directory");?>/fonts/font_1.ttf)format("truetype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_1.svg#fonts)format("svg");
    }
    @font-face {
     font-family:Roboto;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_2.eot);
      src:url(<?php bloginfo("template_directory");?>/fonts/font_2.eot?#iefix)format("embedded-opentype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_2.woff)format("woff"),
          url(<?php bloginfo("template_directory");?>/fonts/font_2.ttf)format("truetype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_2.svg#fonts)format("svg");
    }
    @font-face {
     font-family:Jura;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_3.eot);
      src:url(<?php bloginfo("template_directory");?>/fonts/font_3.eot?#iefix)format("embedded-opentype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_3.woff)format("woff"),
          url(<?php bloginfo("template_directory");?><?php bloginfo("template_directory");?>/fonts/font_3.ttf)format("truetype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_3.svg#fonts)format("svg");
    }
    @font-face {
     font-family:Bages;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_4.eot);
      src:url(<?php bloginfo("template_directory");?>/fonts/font_4.eot?#iefix)format("embedded-opentype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_4.woff)format("woff"),
          url(<?php bloginfo("template_directory");?>/fonts/font_4.ttf)format("truetype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_4.svg#fonts)format("svg");
    }
    @font-face {
     font-family:Glyphicons Halflings;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_5.eot);
      src:url(<?php bloginfo("template_directory");?>/fonts/font_5.eot?#iefix)format("embedded-opentype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_5.woff)format("woff"),
          url(<?php bloginfo("template_directory");?>/fonts/font_5.ttf)format("truetype"),
          url(<?php bloginfo("template_directory");?>/fonts/font_5.svg#fonts)format("svg");
    }
    @font-face {
     font-family: test;
      src:url(<?php bloginfo("template_directory");?>/fonts/font_6.ttf);
    }
  </style>
 </head>
 <body>
 <div id="wptime-plugin-preloader"></div>
  <script type="text/javascript">
   $(document).ready(function(){
    $(".scroll").on("click","a", function (event){
     event.preventDefault();
     var id  = $(this).attr('href'),
     top = $(id).offset().top;
     $('body,html').animate({scrollTop: top}, 1000);
    });
   });
  </script>
  <script>
   function hide_show(){
    var finder = document.getElementById("menu").getElementsByTagName('li');
    if ($(window).width()<="680") 
     if (finder[0].style.display=="none")
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="inline";
     else
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="none";
   }
   $(function(){
    $(window).resize(function(){
     if(document.body.clientWidth>'680'){
      var finder = document.getElementById("menu").getElementsByTagName('li');
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="inline";
     } 
     if(document.body.clientWidth<='680'){
      var finder = document.getElementById("menu").getElementsByTagName('li');
      for (var i = 0; i < finder.length; i++) 
       finder[i].style.display="none";
     } 
    });
   });
   $(document).ready(function(){
    if ($(window).width()<="680"){
     var finder = document.getElementById("menu").getElementsByTagName('li');
     for (var i = 0; i < finder.length; i++) 
      finder[i].style.display="none";
    } 
   });
  </script>
  <div class="dm-overlay" id="feedback">
   <div class="dm-table">
    <div class="dm-cell">
     <div class="dm-modal">
      <a href="#close" class="close"></a>
      <h3>Бесплатная косультация</h3>
      Введите ваш номер и мы с вами свяжемся
      <p><HR WIDTH="75%" SIZE="3" color="darkred"></p>
      <form id="form_1" method="post">
       <input type="text" name="phone" placeholder="Номер телефона" oninput="validatephone(this)" required> 
       <button>Отправить</button>
      </form>
     </div>
    </div>
   </div>
  </div>
  <div class="dm-overlay" id="success">
   <div class="dm-table">
    <div class="dm-cell">
     <div class="dm-modal">
      <a href="#close" class="close"></a>
      <h3>Спасибо за заявку! В ближайшее время мы с вами свяжемся.</h3>
     </div>
    </div>
   </div>
  </div>
  <div class="dm-overlay" id="order-sale">
   <div class="dm-table">
    <div class="dm-cell">
     <div class="dm-modal">
      <a href="#close" class="close"></a>
      <h3>Купон скидка</h3>
      Введите ваш номер и мы забронируем на него скидку
      <p><HR WIDTH="75%" SIZE="3" color="darkred"></p>
      <form id="form_2" method="post">
       <input type="text" name="phone" placeholder="Номер телефона" oninput="validatephone(this)" required>
       <button>Отправить</button>
      </form>
     </div>
    </div>
   </div>
  </div>
  <div class="dm-overlay" id="confident">
   <div class="dm-table">
    <div class="dm-cell">
     <div class="dm-modal">
      <a href="#close" class="close"></a>
      <h3>Политика конфиденциальности</h3>
      <p><HR WIDTH="75%" SIZE="3" color="darkred"></p>
      Nagel-Mebel, не разглашает персональные данные своих пользователей и гарантирует их безопасность.Используются сведения, предоставляемые пользователем, исключительно с целью связи с ним, в том числе для направления электронных уведомлений.
     </div>
    </div>
   </div>
  </div>