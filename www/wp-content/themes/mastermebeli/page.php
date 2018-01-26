<?php 
 session_start(); 
 $_SESSION['e-mail'] = category_description(9); 
?>
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
   <?php if (get_the_ID()=='2'): ?>
    <script>
     $(document).ready(function(){
      $('#sel').change(function(){
       if ($('#sel option:selected').hasClass("sel1")){
        document.getElementById("form_8").style.display="none";
        document.getElementById("form_7").style.display="inherit";
        document.getElementById("calc-2").style.display="none";
        document.getElementById("calc-1").style.display="inherit";
       }
       else if ($("#sel option:selected").hasClass("sel2")){
        document.getElementById("form_7").style.display="none";
        document.getElementById("form_8").style.display="inherit";
        document.getElementById("calc-1").style.display="none";
        document.getElementById("calc-2").style.display="inherit";
       }
      });
     });
    </script>
    <div class="clr"></div>
     <nav id="menu" class="block-menu" onClick="hide_show()" >
      <div class="block-menu__button">4</div>
      <ul><?php wp_nav_menu('primary');?></ul>
     </nav>
     <div class="clr"></div>
     <main>
      <div class="block-about-us">
       <h1 class="block-about-us__span1">ИЗГОТОВИМ ВСТРОЕННУЮ И КОРПУСНУЮ МЕБЕЛЬ</h1>
       <h3 class="block-about-us__span2">для вашего дома по индивидуальному проекту</h3>
       <h3 class="block-about-us__span3">Кухонная мебель и шкафы-купе<br> напрямую с производства, со скидкой 30%</h3>
       <div class="block-about-us__advantage-align">
        <article class="block-about-us__advantage">
         <fieldset>
          <legend>Срок изготовления</legend>
          <span>от 3 дней</span>
         </fieldset>
        </article>
        <article class="block-about-us__advantage">
         <fieldset>
          <legend>Сборка и установка</legend>
          <span>всего за 3 часа</span>
         </fieldset>
        </article>
        <article class="block-about-us__advantage">
         <fieldset>
          <legend>Гарантия на нашу мебель</legend>
          <span>1 год</span>
         </fieldset>
        </article>
       </div>
      </div>
      <div class="block-why-we">
       <h2>Почему сотрудничать с нами <span style="color:darkred;">ВЫГОДНО:</span></h2>
       <div class="block-why-we__why-align">
        <article class="block-why-we__why">
         <h4>)</h4>
         Более 100 000 вариантов расцветок и фактур
        </article>
        <article class="block-why-we__why">
         <h4>#</h4>
         Без наценок диллеров
        </article>
        <article class="block-why-we__why">
         <h4>u</h4>
         Выезд дизайнера, установка, доставка - бесплатно
        </article>
        <article class="block-why-we__why">
         <h4>%</h4>
         Качественные комплектующие от европейских производителей
        </article>
        <article class="block-why-we__why">
         <h4>!</h4>
         Гарантийное и постгарантийное обслуживание
        </article>
        <article class="block-why-we__why">
         <h4>(</h4>
         Ремонт
        </article>
       </div>
      </div>
      <?php 
       $easy= strip_tags(trim(category_description(8)));
       if($easy == "Включен")
        echo'
         <div id="shares" class="slider">
          <div class="slider__title">
           Текущие акции нашей организации
          </div>
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
           </ol>
           <div class="carousel-inner">
            <div class="item active">
             <img src="/wp-content/themes/mastermebeli/design/blocks/slider/slide_1.jpg" alt="Акция_1">
             <div class="carousel-caption">
              <h1>'.category_description(10).'
              </h1>
              <p>
               Введите номер телефона для получения скидки<br><br>
               <a href="#order-sale">Получить скидку</a><br><br>
               * скидка будет забронирована на Ваш номер телефона
              </p>
             </div>
            </div>
            <div class="item">
             <img src="/wp-content/themes/mastermebeli/design/blocks/slider/slide_2.jpg" alt="Акция_2">
             <div class="carousel-caption">
              <h1>Закажите у нас</h1>
              <p>'.category_description(11).'
               <form id="form_3" method="post">
                <input type="text" name="name" placeholder="Ваше имя" minlength="2" required>
                <input type="text" name="phone" placeholder="Ваш телефон" oninput="validatephone(this)" required>
                <span><button>Получить подарок</button></span>
               </form>
               * ваши данные не будут переданы 3-им лицам
              </p>
             </div>
            </div>
           </div>
           <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
           </a>
          </div>
          <div class="clr"></div>
          <div class="line-2"></div>
         </div>';?>
      <div class="clr"></div>
      <div class="block-catalog">
       <HR WIDTH="20%" SIZE="2" color="darkred">
       <h2>КАТАЛОГ ПРОДУКЦИИ</h2>
       <HR WIDTH="20%" SIZE="2" color="darkred">
       <div class="block-catalog__item-align">
        <article class="block-catalog__item" onClick="window.location='/catalog#shkafi'">
         <img src="<?php bloginfo("template_directory");?>/design/icons/shkaf.png" alt="Шкафы"> 
         <h4>Шкафы</h4>
         <HR WIDTH="85%" SIZE="1" color="grey">
         Корпусные и встроенные, эксклюзивные шкафы-купе
        </article>
        <article class="block-catalog__item" onClick="window.location='/catalog#kyxni'">
         <img src="<?php bloginfo("template_directory");?>/design/icons/kyx.png" alt="Кухня">
         <h4>Кухонная мебель</h4>
         <HR WIDTH="85%" SIZE="1" color="grey">
         Изготавливается на современном оборудовании, из качественных материалов
        </article>
        <article class="block-catalog__item" onClick="window.location='/catalog#corpus'">
         <img src="<?php bloginfo("template_directory");?>/design/icons/korpus.png" alt="Корпусная мебель">
         <h4>Корпусная мебель</h4>
         <HR WIDTH="85%" SIZE="1" color="grey">
         Дополнительно изготавливаем комоды, тумбочки, столики и др.
        </article>
       </div>
      </div>
      <div class="clr"></div>
      <div id="calcer" class="block-calcer">
       <h2>Просчитаем стоимость кухни или шкафа</h2>
       Бесплатно и оперативно
       <HR WIDTH="85%" SIZE="2" color="darkred">
       <div class="block-calcer-align">
        <select id="sel" size="1">
         <option class="sel1">Кухня</option>
         <option class="sel2">Шкаф</option>
        </select>
        <div id="result">
         <form id="form_7">
          <input name="cena" placeholder="*стоимость указывайте в бел.руб" required> - Ориентировочная стоимость</input>
          <input name="r_1" placeholder="*размер указывайте в сантиметрах" required></input> - Размер первой стенки
          <input name="r_2" placeholder="*размер указывайте в сантиметрах" required></input> - Размер второй стенки
          <select name="v_mod" size="1">
           <option value="Высота неуказана">Задать высоту</option>
           <option value="570 см.">570 см.</option>
           <option value="720 см.">720 см.</option>
           <option value="920 см.">920 см.</option>
          </select> - Высота модулей
          <select name="m_mod" size="1">
           <option value="Материал не задан">Задать материал</option>
           <option value="Пленка">Пленка</option>
           <option value="ПВХ">ПВХ</option>
           <option value="Пластик">Пластик</option>
           <option value="Патина">Патина</option>
          </select> - Задать материал
          <input name="name" placeholder="*Ваше имя" minlength="2" required></inpunt>
          <input name="phone" placeholder="*Ваш мобильный номер" oninput="validatephone(this)" required></inpunt>
          <button>Отправить</button>
         </form>
         <form id="form_8" style="display:none">
          <select name="type" size="1">
           <option value="Не задан тип шкафа">Тип шкафа</option>
           <option value="Угловой">Угловой</option>
           <option value="Встроенный">Встроенный</option>
           <option value="Корпусный">Корпусный</option>
          </select> - Задайте тип шкафа
          <p>Заполните размеры шкафа:</p>
          <input name="vis" placeholder="*размер указывайте в сантиметрах" required> - Высота</input>
          <input name="shir" placeholder="*размер указывайте в сантиметрах" required></input> - Ширина
          <input name="glyb" placeholder="*размер указывайте в сантиметрах" required></input> - Глубина
          <input name="name" placeholder="*Ваше имя" minlength="2" required></inpunt> 
          <input name="phone" placeholder="*Ваш мобильный номер" oninput="validatephone(this)" required></inpunt>
          <button>Отправить</button>
         </form>
         <img id="calc-1" src="<?php bloginfo("template_directory");?>/design/icons/calc-1.png" width="400" alt="Кухня" style="float:left">
         <img id="calc-2" src="<?php bloginfo("template_directory");?>/design/icons/calc-2.png" width="400" alt="Кухня" style="float:left;display:none;">
        </div>
       </div>
       <HR WIDTH="85%" SIZE="2" color="darkred">
      </div>
      <?php 
       $easy= strip_tags(trim(category_description(12)));
       if($easy == "Включен")
        echo'
         <div class=clr></div>
         <div class="block-order">
         <span class="block-order__image">w</span><br>
         Если у вас есть файл с готовы проектом, или просто фотография шкафа-купе или кухни<br>
         которая вам нравиться, <span style="font-weight:bold;font-family:arial;font-size:22px;">«прикрипите файл»</span>, мы рассчитаем стоимость, и вам перезвоним.
         <form id="form_4" method="post" onsubmit="return false;">  
          <input type="text" name="name" placeholder="Ваше имя" minlength="2" required>
          <div class="clr"></div>
          <input type="text" name="phone" placeholder="Ваш телефон" oninput="validatephone(this)" required>
          <div class="clr"></div>
          <label class="file_upload">
           <span class="send-file">Прикрепить файл</span>
           <input type="file" accept=".txt,image/*" style="display:none" required>
          </label>
          <div class="ajax-respond"></div>
          <button class="submit button">Рассчитать стоимость мебели</button>
         </form> 
         </div>' ?>
      <div class="clr"></div>
      <div class="block-redirect" onClick="window.location='/information'"></div>
      <div class=clr></div>
     </main>
     <script>
      var el = document.getElementById("menu").getElementsByTagName('li');
      for (var i = 0; i <= 1; i++) 
       el[i].className = "scroll";
     </script>
     <script>
      var files; 
      // Вешаем функцию на событие
      // Получим данные файлов и добавим их в переменную
      $('input[type=file]').change(function(){
       files = this.files;
      });
      $('.submit.button').click(function( event ){
       // Создадим данные формы и добавим в них данные файлов из files
       var data = new FormData();
       $.each( files, function( key, value ){
        data.append( key, value );
       });
       // Отправляем запрос
       if(files)
       $.ajax({
        url: '/wp-content/themes/mastermebeli/modules/submit.php?uploadfiles',
        type: 'POST',
        data: data,
        cache: false,
        dataType: 'json',
        processData: false, // Не обрабатываем файлы (Don't process the files)
        contentType: false, // Так jQuery скажет серверу что это строковой запрос
        beforeSend: function(jqXHR, settings) {
         $('.ajax-respond').html( '<img src="<?php bloginfo("template_directory");?>/design/icons/loader.gif" height="64" alt="Загрузчик">' );
        },
        success: function( respond, textStatus, jqXHR ){
         // Если все ОК
         if( typeof respond.error === 'undefined' )
         {
          // Файлы успешно загружены, делаем что нибудь здесь
          // выведем пути к загруженным файлам в блок '.ajax-respond'
          $('.ajax-respond').html( '' );
          files='';
         }
         else
         {
          console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
         }
        },
        error: function( jqXHR, textStatus, errorThrown ){
         console.log('ОШИБКИ AJAX запроса: ' + textStatus );
        }
       });
       else 
        $('.ajax-respond').html('<b style="color:red">Не выбран файл для отправки</b>');
      });
     </script>
     <?php else: ?>
      <?php if (get_the_ID()=='459'): ?>
       <script>
        $(document).ready(function(){
         var hash = window.location.hash.substr(1);
         $('#wrapper').append('<span id="load"><img src="<?php bloginfo("template_directory");?>/design/icons/loader.gif" height="100"><br>Загрузка контента...<br></span>');
         var href = $('#nav li a').each(function(){
          var href = $(this).attr('href');
          if(hash==href.substr(0,href.length-4)){
           $(this).click();
           var toLoad ='/wp-content/themes/mastermebeli/modules/'+hash+'.php';
           $('#content').load(toLoad);
          }
          $('#load').remove(); 
         });    
         $('#nav li a').click(function(){   
          var toLoad = '/wp-content/themes/mastermebeli/modules/'+$(this).attr('href');
          $('#content').hide('fast',loadContent);
          $('#load').remove();
          $('#wrapper').append('<span id="load"><img src="<?php bloginfo("template_directory");?>/design/icons/loader.gif" height="100"><br>Загрузка контента...<br></span>');
          $('#load').fadeIn('normal');
          window.location.hash = $(this).attr('href').substr(0,$(this).attr('href').length-4);
          function loadContent(){
           $('#content').html('');
           $('#content').load(toLoad,'',showNewContent());
          }
          function showNewContent(){
           $('#content').show('normal',hideLoader());
          }
          function hideLoader(){
           setTimeout(function(){$('#load').fadeOut('normal')},2500);
          }
          return false;
         });
        });
       </script>
       <div class="clr"></div>
       <nav id="menu" class="block-menu" onClick="hide_show()" >
        <div class="block-menu__button">4</div>
        <ul>
         <li><a href="/index.php">Главная</a></li>
         <li><a href="/information">Информация</a></li>
         <li><a href="/feed-back">Отзывы</a></li>
        </ul> 
       </nav>
       <div class="clr"></div>
       <main class="catalog">
        <div class="block-tittle">Каталог нашей продуции</div>
        <ul id="nav">
         <li><a href="kyxni.php" onClick="action($(this))">Кухни</a></li>
         <li><a href="shkafi.php" onClick="action($(this))">Шкафы</a></li>
         <li><a href="corpus.php" onClick="action($(this))">Корпусная Мебель</a></li>
        </ul>
        <script type="text/javascript">
         function action(element){
          $('#nav li a').each(function(){
           $(this).attr('class','none');
          });
          element.attr('class','active');
         }
        </script>
        <div id="wrapper">
         <div id="content" class="content"></div>
        </div>
        <form id="form_5" method="post">
         <input type="text" name="name" placeholder="Наименование модели" minlength="2" required>
         <div class="clr"></div>
         <input type="text" name="phone" placeholder="Ваш номер" oninput="validatephone(this)" required>
         <div class="clr"></div>
         <button>Заказать</button>
        </form>
       </main>
       <?php else: ?>
        <?php if (get_the_ID()=='461'): ?>
         <div class="clr"></div>
         <nav id="menu" class="block-menu" onClick="hide_show()" >
          <div class="block-menu__button">4</div>
          <ul>
           <li><a href="/index.php">Главная</a></li>
           <li><a href="/catalog#kyxni">Каталог</a></li>
           <li><a href="/feed-back">Отзывы</a></li>
          </ul> 
         </nav>
         <div class="clr"></div>
         <main class="block-information">
          <div class="block-tittle">Информация</div>
          <?php if ( have_posts() ) : query_posts('cat=3'); while (have_posts()) : the_post(); ?>
           <article class="block-information__item" onClick="window.location.href='<?php the_permalink()?>'"> 
            <?php the_post_thumbnail();?>
            <div class="block-information__text">
             <span><?php the_title();?></span>
             <?php the_content();?>
            </div>
            <div class="clr"></div>
            <div class="block-information__date">Дата размещения новости: <?php the_time('d.m.Y')?></div>
           </article>
          <?php endwhile;?> 
          <?php endif;?>
          <?php wp_reset_query(); ?> 
          <div class="clr"></div>
          <div class="block-information__order">
           <h2>Остались вопросы?Или готовы сделать заказ?</h2>
           <a href="#feedback">Получите бесплатную консультацию специалиста</a>
          </div>
         </main>
         <?php else: ?>
          <?php if (get_the_ID()=='463'): ?>
           <div class="clr"></div>
           <nav id="menu" class="block-menu" onClick="hide_show()" >
            <div class="block-menu__button">4</div>
            <ul>
             <li><a href="/index.php">Главная</a></li>
             <li><a href="/catalog#kyxni">Каталог</a></li>
             <li><a href="/information">Информация</a></li>
            </ul>
           </nav>
           <main>
            <div class="block-feedback">
             <div class="block-tittle">Отзывы наших клиентов</div>
             <?php if ( have_posts() ) : query_posts('cat=5'); while (have_posts()) : the_post(); ?>
              <article class="block-feedback__item">
               <h4><?php the_title();?></h4>
               <div class="block-information__date">Дата размещения новости: <?php the_time('d.m.Y')?></div>
               <div class="clr"></div>
               <?php the_post_thumbnail();?>
               <?php the_content();?>
              </article>
             <?php endwhile;?> 
             <?php endif;?>
             <?php wp_reset_query(); ?> 
            </div>
            <div class="form-comments">
             <span>Оставить отзыв</span>
             <form id="form_6" method="post" onsubmit="return false;">
              <input type="text" name="name" placeholder="Ваше имя" minlength="2" required>
              <textarea  name="comments" placeholder="Ваш комментарий" minlength="10" required></textarea>
              <label class="file_upload">
               <span class="send-file">Прикрепить файл</span>
               <input type="file" accept=".txt,image/*" style="display:none" required>
              </label>
              <div class="ajax-respond"></div>
              <button class="submit button">Оставить комментарий</button>
             </form>
            </div>
           </main>
           <script>
            var files; 
            // Вешаем функцию на событие
            // Получим данные файлов и добавим их в переменную
            $('input[type=file]').change(function(){
             files = this.files;
            });
            $('.submit.button').click(function( event ){
             // Создадим данные формы и добавим в них данные файлов из files
             var data = new FormData();
             $.each( files, function( key, value ){
              data.append( key, value );
             });
             // Отправляем запрос
             if(files)
             $.ajax({
              url: '/wp-content/themes/mastermebeli/modules/submit.php?uploadfiles',
              type: 'POST',
              data: data,
              cache: false,
              dataType: 'json',
              processData: false, // Не обрабатываем файлы (Don't process the files)
              contentType: false, // Так jQuery скажет серверу что это строковой запрос
              beforeSend: function(jqXHR, settings) {
               $('.ajax-respond').html( '<img src="<?php bloginfo("template_directory");?>/design/icons/loader.gif" height="64" alt="Загрузчик">' );
              },
              success: function( respond, textStatus, jqXHR ){
               // Если все ОК
               if( typeof respond.error === 'undefined' ){
                // Файлы успешно загружены, делаем что нибудь здесь
                // выведем пути к загруженным файлам в блок '.ajax-respond'
                $('.ajax-respond').html( '' );
               }
               else{
                console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
               }
              },
              error: function( jqXHR, textStatus, errorThrown ){
               console.log('ОШИБКИ AJAX запроса: ' + textStatus );
              }
             });
             else 
              $('.ajax-respond').html('<b style="color:red">Не выбран файл для отправки</b>');
            });
           </script>
          <?php endif ?>
        <?php endif ?>
      <?php endif ?>
   <?php endif ?>
   <?php get_footer();?>