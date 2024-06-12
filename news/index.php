<?php
include '../php/config.php';

$select_news = mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC" ) or die('Подключение оборвано');
$last_news= mysqli_query($conn, "SELECT * FROM news ORDER BY id DESC LIMIT 1") or die('Подключение оборвано');
 $row5 = mysqli_fetch_assoc($last_news);


?>
<!DOCTYPE html>
<html class="common" lang="ru">

<head>
	<title>Новости</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../local/templates/a/css/style.css@ver=17.css" media="all">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js" defer=""></script>
    <script src="../local/templates/a/js/_fancybox-min.js" defer=""></script>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="description" content="Помогаем муниципальным и частным приютам, пристраиваем и социализируем животных" />
<link href="../local/templates/a/components/bitrix/search.title/1/style.css@170960760976.css" type="text/css"  data-template-style="true"  rel="stylesheet" />
<script>if(!window.BX)window.BX={};if(!window.BX.message)window.BX.message=function(mess){if(typeof mess==='object'){for(let i in mess) {BX.message[i]=mess[i];} return true;}};</script>
<script>(window.BX||top.BX).message({'JS_CORE_LOADING':'Загрузка...','JS_CORE_NO_DATA':'- Нет данных -','JS_CORE_WINDOW_CLOSE':'Закрыть','JS_CORE_WINDOW_EXPAND':'Развернуть','JS_CORE_WINDOW_NARROW':'Свернуть в окно','JS_CORE_WINDOW_SAVE':'Сохранить','JS_CORE_WINDOW_CANCEL':'Отменить','JS_CORE_WINDOW_CONTINUE':'Продолжить','JS_CORE_H':'ч','JS_CORE_M':'м','JS_CORE_S':'с','JSADM_AI_HIDE_EXTRA':'Скрыть лишние','JSADM_AI_ALL_NOTIF':'Показать все','JSADM_AUTH_REQ':'Требуется авторизация!','JS_CORE_WINDOW_AUTH':'Войти','JS_CORE_IMAGE_FULL':'Полный размер'});</script>

<script src="../bitrix/js/main/core/core.js@1709606488494198"></script>


<script>BX.Runtime.registerExtension({'name':'fx','namespace':'window','loaded':true});</script>
<script>(window.BX||top.BX).message({'LANGUAGE_ID':'ru','FORMAT_DATE':'DD.MM.YYYY','FORMAT_DATETIME':'DD.MM.YYYY HH:MI:SS','COOKIE_PREFIX':'BITRIX_SM','SERVER_TZ_OFFSET':'10800','UTF_MODE':'Y','SITE_ID':'s1','SITE_DIR':'/','USER_ID':'','SERVER_TIME':'1713471936','USER_TZ_OFFSET':'0','USER_TZ_AUTO':'Y','bitrix_sessid':'1176d0099a35715dab9434e1056ce213'});</script>



            <script type="text/javascript">
                window.dataLayerName = 'dataLayer';
                var dataLayerName = window.dataLayerName;
            </script>
            <!-- Yandex.Metrika counter -->
           
            <!-- /Yandex.Metrika counter -->
                    <script type="text/javascript">
            window.counters = ["92105288"];
        </script>
        
<script>window[window.dataLayerName] = window[window.dataLayerName] || [];</script>



<script type="text/javascript">var _ba = _ba || []; _ba.push(["aid", "f81faa2375294663e0e129f2a7c80887"]); _ba.push(["host", "www.kotodetki.ru"]); (function() {var ba = document.createElement("script"); ba.type = "text/javascript"; ba.async = true;ba.src = (document.location.protocol == "https:" ? "https://" : "http://") + "bitrix.info/ba.js";var s = document.getElementsByTagName("script")[0];s.parentNode.insertBefore(ba, s);})();</script>


</head>

<body class="common__body">
    <div class="app">
        <header class="header">
	   
            <div class="header__inner">
                <input class="header__menu-activation" id="header-menu-activation" type="checkbox"><a class="header__logo" href="/index.php" margin-bottom:5px><img  src="/local/templates/a/img/logo.png" alt="" ></a>
                <div class="header__main">

                    
                    <nav class="header__menu">

		                        <div class="header__menu-i"><a href="/about/index.html">О фонде</a></div>

		                        <div class="header__menu-i"><a href="/history/looking/index.php">Ищут дом</a></div>
		

	
	<div class="header__menu-i"><a href="/history/happy/index.html">Счастливые истории</a></div>
		                                           </nav>                    <div class="social"><a class="social__i" href="mailto:bfbbim@gmail.com"><i class="icon icon-email"></i></a><a class="social__i" href="https://www.youtube.com/@user-xm2be5zu6x"><i class="icon icon-yb"></i></a><a class="social__i" href="https://vk.com/bfbbim"><i class="icon icon-vk"></i></a></div>
                    <div class="header__btns"><a class="btn main _mini" href="help/index.html">Хочу помочь<i class="icon icon-heart"></i></a></div>
                </div>
                <label class="header__menu-btn" for="header-menu-activation"><i class="icon icon-menu"></i></label>
            </div>
        </header>
        <main class="main">
	<div class="index">
                <div class="section__banner">
                    <div class="inner">
                        <h1 class="h1 color6">Новости фонда</h1>
                    </div>
                </div>
                <section class="section _pb-8 _pt-8 inner">
                    <div class="section__title">
                        <h2 class="h3">Главное в этом месяце</h2>
                    </div>
                    <div class="news-list">
                        <?php
                        while ($row3 = $select_news->fetch_assoc()){
                            if($row3['id'] == $row5['id']){
                                echo'
	                        <div class="news _main" id="bx_3218110189_'.$row3['id'].'">
				<img src="'.$row3['img_news'].'" alt="'.$row3['name_news'].' " loading="lazy">
                            <div class="news__date">'.$row3['date_news'].'</div>
                            <div class="news__title"><a href="news1.php?id='.$row3['id'].'">'.$row3['name_news'].' </a></div>
                        </div>
                        ';
                            }
                            else {
                                echo'
	                        <div class="news" id="bx_3218110189_'.$row3['id'].'">
				<img src="'.$row3['img_news'].'" alt="'.$row3['name_news'].'" loading="lazy">
                            <div class="news__date">'.$row3['date_news'].'</div>
                            <div class="news__title"><a href="podvedeny-itogi-aktsii-vagonchik-dobra-37/index.html">'.$row3['name_news'].'</a></div>
                        </div>';
                            }
                            }
                                ?>
	                        
	                       
	                       
	                        
                    </div>
	                </section><br>
	</div>
        </main>
        <footer class="footer">
            <div class="footer__inner inner">
                <div class="footer__main">
                    <div class="footer__col"><a class="footer__logo" href="index.html"><img src="../local/templates/a/img/logo.png" alt=""></a>
                        <div class="footer__links">Благотворительный фонд помощи бездомным животным «Белый Бим»</div>
                    </div>
                    <div class="footer__col">
                        <div class="footer__title">Меню</div>
                        <nav class="footer__menu">
							<a class="footer__menu-i" href="/about/index.html">О фонде</a>
							<a class="footer__menu-i" href="/history/looking/index.php">Ищут дом</a>
                            <a href="/history/happy/index.html">Счастливые истории</a>
			         </nav>                    </div>
                    <div class="footer__col">
                        <div class="footer__title">Контакты</div>
                        <div class="footer__menu">
                            <p>По любым вопросам:<br><a href="mailto:bfbbim@gmail.com">bfbbim@gmail.com</a></p> +7 (4942) 50 47 31
                        </div>
                        <div class="footer__social">
                            <div class="social _alt _large">
				<a class="social__i" href="https://vk.com/bfbbim"><i class="icon icon-vk"></i></a>
				<a class="social__i" href="https://www.youtube.com/@user-xm2be5zu6x"><i class="icon icon-yb"></i></a>
			    </div>
                        </div>
                    </div>
                    <div class="footer__btns"><a class="btn _color4 _mini" href="/help/index.html">Хочу помочь</a><a class="btn _border-alt _mini" href="/volonter/index.html">Стать волонтером</a></div>
                </div>
                <div class="footer__bottom">
                    <div class="footer__links">
			</div>
                    <div class="footer__col _centered"><img ><small>© 2016-2024 «Белый Бим».</small></div>
                    <div class="footer__links _right"></div>
                </div>
            </div>
        </footer>
        <script src="../local/templates/a/js/_swiper-bundle-min.js" defer=""></script>
        <script src="../local/templates/a/js/script-min.js@ver=17" defer=""></script>


        <div class="popup" data-popup="report">
            <div class="popup__scroll">
                <div class="popup__content _limited-w-l">
                    <div class="popup__btns"><a class="btn _color5 _medium" href="index.html">Финансовый отчет</a><a class="btn _color5 _medium" href="index.html">Содержательный отчет</a></div>
                </div>
            </div>
        </div>
        <div class="popup" data-popup="donate">
            <div class="popup__scroll">
                <div class="popup__content _alt-bg _limited-w-m">
                    <div class="popup__close"><i class="icon icon-close2"></i></div>
                    <form class="form" action="https://www.kotodetki.ru/local/best2pay/pay.php">
                        <div class="form__group">
                            <div class="donate-form _alt">
                                <label class="input-btn">
                                    <input type="radio" name="amount_checkbox" value="200"><span class="input-btn__mask">200 р.</span>
                                </label>
                                <label class="input-btn">
                                    <input type="radio" name="amount_checkbox" value="500"><span class="input-btn__mask">500 р.</span>
                                </label>
                                <label class="input-btn">
                                    <input type="radio" name="amount_checkbox" value="700"><span class="input-btn__mask">700 р.</span>
                                </label>
                                <label class="input-btn">
                                    <input type="radio" name="amount_checkbox" value="1500"><span class="input-btn__mask">1500 р.</span>
                                </label>
                                <label class="input-btn _2-col">
                                    <input type="number" placeholder="Другая сумма" name="amount_string">
                                </label>
                            </div>
                            <label class="toggle">
                                <input type="checkbox" name="recur"><span class="toggle__mask"></span><span class="toggle__label">Помогать ежемесячно</span>
                            </label>
                        </div>
                        <div class="form__item">
                            <div class="form__label">Заполните, пожалуйста, контактные данные, чтобы мы могли отправить вам чек пожертвования</div>
                            <div class="form__row">
                                <input class="input _bordered" type="text" name="name" placeholder="Ваше имя">
                                <input class="input _bordered" type="email" name="email" placeholder="Ваша электронная почта">
                            </div>
                            <label class="checkbox _alt">
                                <input type="checkbox" required><span class="checkbox__mask"></span>
                                <div class="checkbox__label">Согласен с офертой и на обработку персональных данных</div>
                            </label>
                        </div>
<input type="hidden" name="pet" value="" />
<input type="hidden" name="runner" value="" />
<input type="hidden" name="looking" value="" />
<input type="hidden" name="desc" value="" />
                        <button class="btn _full">Помочь</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<!-- CLEANTALK template addon -->
<!--'start_frame_cache_cleantalk_frame'--><script data-skip-moving = 'true'>
                    var ct_checkjs_val = '1646e575aca5e2f6e6a007718e45c5e4', ct_date = new Date(), 
                    ctTimeMs = new Date().getTime(),
                    ctMouseEventTimerFlag = true, //Reading interval flag
                    ctMouseData = [],
                    ctMouseDataCounter = 0;

                    function ctSetCookie(c_name, value) {
                        document.cookie = c_name + '=' + encodeURIComponent(value) + '; path=/';
                    }

                    ctSetCookie('ct_ps_timestamp', Math.floor(new Date().getTime()/1000));
                    ctSetCookie('ct_fkp_timestamp', '0');
                    ctSetCookie('ct_pointer_data', '0');
                    ctSetCookie('ct_timezone', '0');

                    ct_attach_event_handler(window, 'DOMContentLoaded', ct_ready);

                    setTimeout(function(){
                        ctSetCookie('ct_timezone', ct_date.getTimezoneOffset()/60*(-1));
                        ctSetCookie('ct_checkjs', ct_checkjs_val);  
                    },1000);

                    /* Writing first key press timestamp */
                    var ctFunctionFirstKey = function output(event){
                        var KeyTimestamp = Math.floor(new Date().getTime()/1000);
                        ctSetCookie('ct_fkp_timestamp', KeyTimestamp);
                        ctKeyStopStopListening();
                    }

                    /* Reading interval */
                    var ctMouseReadInterval = setInterval(function(){
                        ctMouseEventTimerFlag = true;
                    }, 150);
                        
                    /* Writting interval */
                    var ctMouseWriteDataInterval = setInterval(function(){
                        ctSetCookie('ct_pointer_data', JSON.stringify(ctMouseData));
                    }, 1200);

                    /* Logging mouse position each 150 ms */
                    var ctFunctionMouseMove = function output(event){
                        if(ctMouseEventTimerFlag == true){
                            
                            ctMouseData.push([
                                Math.round(event.pageY),
                                Math.round(event.pageX),
                                Math.round(new Date().getTime() - ctTimeMs)
                            ]);
                            
                            ctMouseDataCounter++;
                            ctMouseEventTimerFlag = false;
                            if(ctMouseDataCounter >= 100){
                                ctMouseStopData();
                            }
                        }
                    }

                    /* Stop mouse observing function */
                    function ctMouseStopData(){
                        if(typeof window.addEventListener == 'function'){
                            window.removeEventListener('mousemove', ctFunctionMouseMove);
                        }else{
                            window.detachEvent('onmousemove', ctFunctionMouseMove);
                        }
                        clearInterval(ctMouseReadInterval);
                        clearInterval(ctMouseWriteDataInterval);                
                    }

                    /* Stop key listening function */
                    function ctKeyStopStopListening(){
                        if(typeof window.addEventListener == 'function'){
                            window.removeEventListener('mousedown', ctFunctionFirstKey);
                            window.removeEventListener('keydown', ctFunctionFirstKey);
                        }else{
                            window.detachEvent('mousedown', ctFunctionFirstKey);
                            window.detachEvent('keydown', ctFunctionFirstKey);
                        }
                    }

                    if(typeof window.addEventListener == 'function'){
                        window.addEventListener('mousemove', ctFunctionMouseMove);
                        window.addEventListener('mousedown', ctFunctionFirstKey);
                        window.addEventListener('keydown', ctFunctionFirstKey);
                    }else{
                        window.attachEvent('onmousemove', ctFunctionMouseMove);
                        window.attachEvent('mousedown', ctFunctionFirstKey);
                        window.attachEvent('keydown', ctFunctionFirstKey);
                    }
                    /* Ready function */
                    function ct_ready(){
                      ctSetCookie('ct_visible_fields', 0);
                      ctSetCookie('ct_visible_fields_count', 0);
                      setTimeout(function(){
                        for(var i = 0; i < document.forms.length; i++){
                            var form = document.forms[i];
                            if (form.action.toString().indexOf('/auth/?forgot_password') !== -1)  {
                                continue;
                            }
                            form.onsubmit_prev = form.onsubmit;
                            form.onsubmit = function(event){

                                /* Get only fields */
                                var elements = [];
                                for(var key in this.elements){
                                  if(!isNaN(+key))
                                    elements[key] = this.elements[key];
                                }

                                /* Filter fields */
                                elements = elements.filter(function(elem){

                                    var pass = true;

                                    /* Filter fields */
                                    if( getComputedStyle(elem).display    === 'none' ||   // hidden
                                        getComputedStyle(elem).visibility === 'hidden' || // hidden
                                        getComputedStyle(elem).opacity    === '0' ||      // hidden
                                        elem.getAttribute('type')         === 'hidden' || // type == hidden
                                        elem.getAttribute('type')         === 'submit' || // type == submit
                                        elem.value                        === ''       || // empty value
                                        elem.getAttribute('name')         === null
                                    ){
                                    return false;
                                    }

                                    /* Filter elements with same names for type == radio */
                                    if(elem.getAttribute('type') === 'radio'){
                                        elements.forEach(function(el, j, els){
                                        if(elem.getAttribute('name') === el.getAttribute('name')){
                                            pass = false;
                                            return;
                                        }
                                    });
                                }

                                return true;
                            });

                            /* Visible fields count */
                            var visible_fields_count = elements.length;

                            /* Visible fields */
                            var visible_fields = '';
                            elements.forEach(function(elem, i, elements){
                              visible_fields += ' ' + elem.getAttribute('name');
                            });
                            visible_fields = visible_fields.trim();

                            ctSetCookie('ct_visible_fields', visible_fields);
                            ctSetCookie('ct_visible_fields_count', visible_fields_count);

                            /* Call previous submit action */
                            if(event.target.onsubmit_prev instanceof Function){
                              setTimeout(function(){
                                event.target.onsubmit_prev.call(event.target, event);
                              }, 500);
                            }
                          };
                        }
                      }, 1000);
                    }

                    function ct_attach_event_handler(elem, event, callback){
                      if(typeof window.addEventListener === 'function') elem.addEventListener(event, callback);
                      else                                              elem.attachEvent(event, callback);
                    }

                    function ct_remove_event_handler(elem, event, callback){
                      if(typeof window.removeEventListener === 'function') elem.removeEventListener(event, callback);
                      else                                                 elem.detachEvent(event, callback);
                    }
                    
                    if(typeof jQuery !== 'undefined') {

            /* Capturing responses and output block message for unknown AJAX forms */
            jQuery(document).ajaxComplete(function (event, xhr, settings) {
              if (xhr.responseText && xhr.responseText.indexOf('"apbct') !== -1) {
                try {
                  var response = JSON.parse(xhr.responseText);
                  if (typeof response.apbct !== 'undefined') {
                    response = response.apbct;
                    if (response.blocked) {
                      alert(response.comment);
                      if(+response.stop_script == 1)
                        window.stop();
                    }
                  }                  
                } catch (e) {
                  return;
                }

              }
            });
            
          }
                    </script><!--'end_frame_cache_cleantalk_frame'--><!-- /CLEANTALK template addon -->
</body>

</html>