<?php
// Задаем константы:
define ('DS', DIRECTORY_SEPARATOR); // разделитель для путей к файлам
$sitePath = realpath(dirname(__FILE__) . DS) . DS;
define ('SITE_PATH', $sitePath); // путь к корневой папке сайта

// для подключения к бд
define('DB_USER', 'gbua_z_shk71e65');
define('DB_PASS', 'zze96788a45');
define('DB_HOST', 'mysql316.1gb.ua');
define('DB_NAME', 'gbua_z_shk71e65');

define('IMAGES_ROOT_DIR', $sitePath.'web'.DS.'data'.DS.'imgs'.DS);

$ganId="UA-145454799-1";
$gtmPortfolioId="GTM-K4P3CCF";

define('GAN_HEAD', "<script async src='https://www.googletagmanager.com/gtag/js?id=".$ganId."'></script><script>
                          window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}
                          gtag('js', new Date());gtag('config', '".$ganId."');</script>");

define('GTM_HEAD',"<!-- Google Tag Manager -->
             <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
              new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
              j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
              'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
              })(window,document,'script','dataLayer','".$gtmPortfolioId."');
            </script> <!-- End Google Tag Manager -->");

define('GTM_BODY',"<!-- Google Tag Manager (noscript) -->
                <noscript><iframe src='https://www.googletagmanager.com/ns.html?id=".$gtmPortfolioId." height='0' width='0'
                    style='display:none;visibility:hidden'>
                    </iframe>
                </noscript>
              <!-- End Google Tag Manager (noscript) -->");

define("fbMsgPlugin", "  <!-- Load Facebook SDK for JavaScript -->
                          <div id='fb-root'></div>
                          <script>
                            window.fbAsyncInit = function() {
                              FB.init({
                                xfbml            : true,
                                version          : 'v5.0'
                              });
                            };
                    
                            (function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = 'https://connect.facebook.net/ru_RU/sdk/xfbml.customerchat.js';
                            fjs.parentNode.insertBefore(js, fjs);
                          }(document, 'script', 'facebook-jssdk'));</script>
                    
                          <!-- Your customer chat code -->
                          <div class='fb-customerchat' 
                            attribution='setup_tool'
                            page_id='101333651340828'
                            theme_color='#44bec7'
                            logged_in_greeting='Здраствуйте !'
                            logged_out_greeting='Здраствуйте !'>
                          </div>");