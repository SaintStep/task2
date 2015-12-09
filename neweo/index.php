

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/screen.css" rel="stylesheet">
    <link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
    <link href="css/reset.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="forms.js"></script> <!-- Конфликтовал с js.js (Надо ставить выше)-->
    <script src="js/js.js"></script>
    <link rel="stylesheet" href="fonts/icomoon/icomoon.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
        (function(){
            if (typeof carrotquest === 'undefined') {
                var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
                s.src = '//cdn.carrotquest.io/api.min.js';
                var x = document.getElementsByTagName('head')[0]; x.appendChild(s);

                carrotquest = {}; window.carrotquestasync = []; carrotquest.settings = {};
                m = ['connect', 'identify', 'track', 'auth'];
                function Build(name, args){return function(){window.carrotquestasync.push(name, arguments);} }
                for (var i = 0; i < m.length; i++) carrotquest[m[i]] = Build(m[i]);
            }
        })();
        carrotquest.connect('1758-2e30ce1ab118168801855c0305e');
    </script>

</head>
<body>
<div id="wrapper">
    <header id="header">
        <div class="container">
            <div class="row">
                <div class="logo col-lg-2 col-md-3 col-sm-3 col-xs-3 hidden-xs">
                    <a href="https://astralm.ru/"> <img src="images/logo.png" alt="logo"></a>
                </div>




                <div id="h-search" class="col-lg-7 col-md-5 col-sm-5 col-xs-5 hidden-xs" >
                    <form action="/search/index.php" id="h-search-form" name="search">
                        <input type="text" id="q" name="q"  value="" placeholder="Поиск по сайту">
                        <input type="submit" id="s" name="s"  value="">
                    </form>
                </div>

                <div class="h-contakt col-lg-3 col-md-4 col-sm-4 col-xs-4 hidden-xs">
                    <div class="h-phone">
                        <p>Телефон в Москве</p>
                        <p>+7 (499) 649-30-42</p>
                    </div>
                    <div class="h-phone">
                        <p>Техподдержка</p>
                        <p>8 (800) 700 86 68</p>
                    </div>
                    <div class="h-phone">
                        <a href="#" class="top-btn" id="top-btn">Заказать звонок</a>
                    </div>
                </div>

            </div>
        </div>
    </header>
    <div class="row">
        <div class="navbar navbar-inverse" id="menu">
            <div class="container">
                <div class="navbar-header">
                    <a href="https://astralm.ru/" class="navbar-brand hidden-lg hidden-md hidden-sm visible-xs"><img src="images/logo-long.png" height="30" width="100" style="margin-top:-7px;"></a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
                        <span class="sr-only">Открыть навигацию</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="responsive-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="/products/">Продукты </a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/esignature/">Электронная подпись</a></li>
                                <li><a href="/products/report/">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/">1С-Отчетность</a></li>
                                <li><a href="/products/security/">Защита информации</a></li>
                                <li><a href="/products/alco/">Росалкоголь регулирование</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/">Сервис 1С-ЭТП</a></li>
                                <li><a href="/bg/">Банковская гарантия</a></li>
                                <li><a href="/sverka_nds/">Сверка НДС</a></li>
                                <li><a href="/1c-navigator/">1С:Бизнес-Навигатор</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/about/partnership/">Партнерам</a>
                        </li>
                        <li class="dropdown">
                            <a href="/news/">Новости</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/news/">Все новости</a></li>
                                <li><a href="/news/electronic-reports/">Электронная отчетность</a></li>
                                <li><a href="/news/certification_center/">Электронная подпись</a></li>
                                <li><a href="/news/astral-report/">1С-Отчетность</a></li>
                                <li><a href="/news/1c-report/">Астрал Отчет</a></li>
                                <li><a href="/news/buh-report/">Бухгалтерская отчетность</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/blog/">Блоги</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/blog/accountant_report/">Бухгалтерская отчетность</a></li>
                                <li><a href="/blog/electronic_reports/">Электронная отчетность</a></li>
                                <li><a href="/blog/astral_report/">Астрал Отчет</a></li>
                                <li><a href="/blog/1c-reports/">1С-Отчетность</a></li>
                                <li><a href="/blog/certification_center/">Электронная подпись</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="/about/">О компании</a>
                            <ul class="dropdown-menu hidden-xs">
                                <li><a href="/about/">О компании</a></li>
                                <li><a href="/about/clients/">Бизнес-партнеры</a></li>
                                <li><a href="/about/reviews/">Отзывы клиентов</a></li>
                                <li><a href="/about/vacancy/">Вакансии</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="/contacts/">Контакты</a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="clear"></div>
    <!--    END MENU    -->


  

    <div class="container">
        <aside class="col-lg-3 col-md-3 hidden-sm hidden-xs">
            <div id="left-menu-ecp">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>1 test</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>1 test</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">2 test</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">3 test</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">4 test</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">4 test</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">5 test</a><br>
                </div>
                <div class="clear"></div>
            </div>
        </aside>











        <div class="open_menu hidden-lg hidden-md">
        </div>
        <aside id="aside-ecp" class="col-lg-3 col-md-3">
            <a class="ac_popap_close close_menu" href="#"></a>
            <div id="left-menu-ecp" class=" modal_menu">
                <div class="left-menu-link">
                    <a class="active" href="/esignature/"><span>ЭЦП</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/egais"><span>ЭЦП для ЕГАИС</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/voprosy-i-otvety/"><span>ВОПРОСЫ И ОТВЕТЫ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/primenenie/"><span>ПРИМЕНЕНИЕ</span></a><br>
                    <a href="/esignature/primenenie/dlya-otchetnosti/">Отчетность</a><br>
                    <a href="/esignature/primenenie/dlya-dokumentooborota/">Документооборот</a><br>
                    <a href="/esignature/primenenie/dlya-torgov-(auktsiony)/">Торги</a><br>
                    <a href="/esignature/primenenie/dlya-zakupok-(tendery)">Закупки</a><br>
                    <a href="/esignature/primenenie/lichnaya-podpis/">Личная подпись</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/ceny/"><span>ЦЕНЫ</span></a><br>
                    <a href="/esignature/ceny/tarify/">Тарифы</a><br>
                    <a href="/esignature/ceny/dopolnitelno/">Дополнительно</a><br>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/poryadok-polucheniya/"><span>ПОРЯДОК ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/mesta-polucheniya/"><span>МЕСТА ПОЛУЧЕНИЯ</span></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/soprovozhdenie-torgov/"><span>СОПРОВОЖДЕНИЕ ТОРГОВ</span></a>
                    <a href=""></a>
                </div>
                <div class="clear"></div>
                <div class="left-menu-link">
                    <a href="/esignature/spisok-ploshchadok/"><span>СПИСОК ПЛОЩАДОК</span></a>
                </div>
                <div class="clear"></div>

            </div>
        </aside>









  <!-- #WORK AREA# -->
        <section id="right-content-ecp" class="col-lg-9 col-md-9 col-sm-12 col-xs-12 clearfix">
            <!-- Navigation in section -->
            <nav>
                <ul class="clearfix">
                    <li><a href="#">Главная</a></li>
                    <li><a href="#">Электронная отчетность</a></li>
                    <li><a href="#">Общая информация</a></li>
                    <li><a href="#" class="current">Способы сдачи ЭО</a></li>
                </ul>
            </nav><!-- //Navigation in section -->
            <!-- Block for text 1-->
            <div class="box-text">
                <h2 class="title">Способы сдачи электронной отчетности</h2>
                <span>Как сдавать электронную отчетность</span>
                <div class="box-info">
                    <p>Передача электронной отчетности при помощи интернета позволяет оптимизировать рабочий процесс в организациях и снизить нагрузку на сотрудников контролирующих органов. Осуществить отправку электронной отчетности можно следующими способами:</p>
                    <ul>
                        <li>С помощью on-line формы, размещенной на сайте каждого контролирующего органа;</li>
                        <li>С помощью спецоператора с использованием специализированного программного обеспечения.</li>
                    </ul>
                    <p>Выбор оптимального способа не зависит от органа, в который направляется электронная отчетность. Программы, разработанные для автоматизации процесса ее составления и передачи, поддерживают работу со всеми формами отчетности. Подробную информацию о том, как сдавать электронную отчетность с их помощью, можно получить в службе поддержки, предоставляемой разработчиком программного обеспечения.</p>
                </div>
            </div><!-- //Block for text 1-->
            <!-- Block for text 2-->
            <div class="box-text">
                <h3 class="title">Сдать электронную отчетность</h3>
                <span>Электронная отчетность через интернет что лучше?</span>
                <div class="box-info">
                    <p>До недавнего времени большинство индивидуальных предпринимателей и организаций передавали документацию в бумажном виде, не зная о том, что можно сдать отчетность через интернет. Что это такое пришлось узнать в 2015 году, когда в силу вступили изменения в действующем законодательстве, обязавшие ряд организаций сдавать электронную отчетность через интернет. Что лучше выбрать для наиболее удобной ее передачи в контролирующие органы: сервисы, предоставленные на их официальных сайтах или специализированное программное обеспечение?</p>
                    <p>Программы электронной отчетности – это программный продукт, разработанный для формирования и отправки отчетной документации с помощью телекоммуникационных каналов связи. Кроме того, программы электронной отчетности обладают дополнительными возможностями, позволяющими пользователю создавать запросы на получение сведений из ФНС, ПФР, ФСС, а также получать консультации от службы технической поддержки в режиме реального времени.</p>
                    <p>Формы отчетности в электронном виде ничем не отличаются от привычных форм, заполняемых на бумаге, при этом налоговая отчетность через интернет формируется и отправляется гораздо быстрее, чем при подаче ее традиционным способом.</p>
                    <p>Еще один вопрос, волнующий лиц, обязанных представлять документы через интернет – уровень надежности системы, с помощью которой формируется и передается электронная отчетность. Программа, разработанная специально для осуществления подобных действий, поддерживает работу с электронной цифровой подписью, позволяющей шифровать все передаваемые сведения – это значит, что программа отчетности в ПФР и иные контролирующие органы является надежным средством для отправки документов.</p>
                    <div class="row clearfix">
                        <div class="col">
                            <div class="bg">
                                <img src="images/EO_TZ-4_1/EO_TZ-4_1.png" width="252" height="224" alt="оффициальный сайт службы" title="оффициальный сайт службы">
                                <p class="title text-right">Сдача через<br>официальный сайт<br>от службы</p>
                            </div>
                            <p>Сдача отчетности с помощью on-line форм, размещенных на сайтах контролирующих органов, является быстрым и надежным способом для формирования и передачи документации.</p>
                            <p>Однако отсутствие технической поддержки и возможности получения консультации в режиме реального времени значительно усложняют процедуру подготовки и передачи отчетности адресату.</p>
                        </div>
                        <div class="col">
                            <div class="bg clearfix">
                                <img class="right" src="images/EO_TZ-4_1/EO_TZ-4_2.png" width="253" height="224" alt="техническая поддержка" title="техническая поддержка">
                                <p class="title text-left">Сдача<br>через ПО<br>и техническую<br>поддержку</p>
                            </div>
                            <p>Формирование и передача отчетности, созданной с использованием специализированного программного обеспечения, путем отправки ее через каналы связи, позволяет не только с легкостью заполнить формы документации, установленные законодательством, но и получить on-line консультацию от специалиста техподдержки.</p>
                        </div>
                    </div>
                </div>
            </div><!-- //Block for text 2-->
            <!-- Block for text 3-->   
            <div class="box-text">
                <h3 class="title">Использование ЭЦП для сдачи<br>электронной отчетности</h3>
                <span>Обязательная электронная отчетность</span>
                <div class="box-info">
                    <p>Электронная цифровая подпись (ЭЦП) является современным средством для защиты от несанкционированного доступа и внесения изменений в документацию. С развитием телекоммуникационных технологий и разработкой процедуры передачи электронной отчетности через интернет, использование ЭЦП стало обязательным при формировании документов.</p>
                    <p>Цифровая подпись выдается удостоверяющим центром и действует в течение одного года с момента ее получения. Ознакомиться с принципами функционирования ЭЦП можно, перейдя по ссылке <a href="https://astralm.ru/esignature/">https://astralm.ru/esignature/</a></p>
                </div>
                <div class="article-wrap">
                    <div class="article-info clearfix">
                        <img src="images/EO_TZ-4_1/EO_TZ-4-2__30.png" width="69" height="70" alt="дополнительная информация" title="дополнительная информация">
                        <div class="text">
                            <p>Используя специализированное ПО для формирования и передачи отчетности, организация сэкономит немало временных ресурсов на процедуре подготовки и сдачи документов – удобный интерфейс программ позволяет без проблем создать нужную документацию.</p>
                        </div>
                    </div>
                    <div class="article-info clearfix">
                        <img class="warning" src="images/EO_TZ-4_1/EO_TZ-4_11.png" width="67" height="60" alt="предупреждение" title="предупреждение">
                        <div class="text">
                            <p>В качестве санкции за несоблюдение сроков сдачи отчетности в любой контролирующий орган, действующим законодательством предусмотрена система штрафов, размер которых зависит от вида просроченной отчетности и лица, допустившего это нарушение.</p> 
                            <p>Используя онлайн формы для передачи документации, плательщик рискует допустить ошибки при ее формировании и отправке, что повлечет за собой ее возврат на доработку. </p>
                            <p>При использовании специализированного ПО риск возникновения подобной ситуации сведен к минимуму – каждый шаг при его настройке и использовании можно обсудить со специалистом.</p>
                        </div>
                    </div>
                </div>
            </div><!-- //Block for text 3-->
            <!-- Block for text 4-->  
            <div class="box-text">
                <h3 class="title">Программы для сдачи обязательной<br>электронной отчетности</h3>
                <div class="box-info clearfix">
                    <div class="row unindent clearfix">
                        <div class="col">
                            <div class="programm-box">
                                <p class="company">Астрал Отчет</p>
                                <div class="cost-info clearfix">
                                    <div class="cost">
                                        <p>Стоимость подключения</p>
                                        <span class="big"><sup>от</sup>3150</span><br><span class="unit">рублей. / год</span>
                                    </div>
                                    <a href="#" class="btn">Подробнее</a>   
                                </div>
                            </div>
                            <p>Программа Астрал Отчет, разработанная для формирования и сдачи отчетности в контролирующие органы с помощью телекоммуникационных каналов связи, обладает широким спектром возможностей.</p>
                            <p>С ее помощью можно не только создать документацию в соответствии с нормами действующего законодательства, но и получить необходимую информацию из реестров Налоговой службы и Пенсионного фонда в режиме реального времени.</p>
                        </div>
                        <div class="col">
                            <div class="programm-box report">
                                <p class="company">1С Отчетность</p>
                                <div class="cost-info clearfix">
                                    <div class="cost">
                                        <p>Стоимость подключения</p>
                                        <span class="big"><sup>от</sup>1200</span><br><span class="unit">рублей. / год</span>
                                    </div>
                                    <a href="#" class="btn">Подробнее</a>   
                                </div>
                            </div>
                            <p>Программа 1С-Отчетность позволяет пользователям формировать и передавать отчетность в привычной программной среде.</p>
                            <p>При установке ПО происходит его внедрение в установленную на рабочем компьютере программу 1С, знакомую любому бухгалтеру, после чего все операции по созданию документов осуществляются с ее помощью.</p>
                            <p>Для передачи отчетов не требуется запускать дополнительные утилиты – эта процедура также производится с помощью 1С-Отчетность.</p>
                        </div>
                    </div>
                    <!-- Block with form and description -->
                    <div class="form-box">
                        <div class="row clearfix">
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <h3 class="title">Мы можем подобрать Вам наиболее выгодный тариф по электронной отчетности</h3>
                                <div class="box-info clearfix">
                                    <p>Для получения дополнительных консультаций по вопросам приобретения, установки и функционирования ПО, предназначенного для сдачи всех видов электронной отчетности в контролирующие органы, нужно оставить заявку на сайте разработчика <a href="https://astralm.ru">https://astralm.ru/</a>, и дождаться звонка дежурного специалиста.</p>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5 col-sm-5">
                                <!-- Form -->
                                <form  id="callback" class="callback">
                                    <div class="clearfix">
                                        <img src="images/EO_TZ-4_1/EO_TZ-4_7.png" width="101" height="74" alt="обратный звонок" title="обратный звонок">
                                        <p>Мы перезвоним <br>Вам в течение часа</p>
                                    </div>
                                    <input type="text" name="name" placeholder="Ваше Имя" required />
                                    <input type="email" name="email" placeholder="Ваш Email" required />
                                    <a href="#">Условия предоставления сервиса</a>
                                    <button class="btn" type="submit">Заказать ЭО</button>
                                </form><!-- //Form -->
                            </div>
                        </div>
                    </div><!-- //Block with form and description -->
                </div>
            </div><!-- //Block for text 4-->
        </section>
    
<!-- # END WORK AREA# -->
















    </div>
    <!--    FOOTER    -->
    <footer id="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Основные разделы</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/products/" class="nav_link">Продукты</a></li>
                                <li><a href="/about/partnership/" class="nav_link">Партнерам</a></li>
                                <li><a href="/news/" class="nav_link">Новости</a></li>
                                <li><a href="/blog/" class="nav_link">Блоги</a></li>
                                <li><a href="/about/" class="nav_link">О компании</a></li>
                                <li><a href="/contacts/" class="nav_link">Контакты</a></li>
                                <li><a href="/privacy_security/" class="nav_link">Конфидициальность</a></li>
                                <li><a href="/feedback/" class="nav_link">Обратная связь</a></li>
                                <li><a href="/about/vacancy/" class="nav_link">Вакансии</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 hidden-xs">
                        <h4 class="footer_title">Продукты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li><a href="/esignature/" class="nav_link">Электронная подпись</a></li>
                                <li><a href="/products/report/" class="nav_link">Астрал Отчет</a></li>
                                <li><a href="/products/1c-accounting/" class="nav_link">1С-Отчетность</a></li>
                                <li><a href="/products/security/" class="nav_link">Защита информации</a></li>
                                <li><a href="/products/alco/" class="nav_link">РАР</a></li>
                                <li><a href="/products/otsenka-usloviy-truda_old/" class="nav_link">СОУТ</a></li>
                                <li><a href="/products/skrin-astral/" class="nav_link">СКРИН.Астрал</a></li>
                                <li><a href="/products/servis-1s-etp/" class="nav_link">Сервис 1С-ЭТП</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Техническая поддержка</h4>
                        <nav class="footer_nav tp">
                            <ul>
                                <li>
                                    <div><span>«Астрал Отчет»</span><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет">+7 (495) 663-73-58, доб. 10</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка Астрал Отчет"><a href="mailto:#">support@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«1С Отчетность»</span><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность">+7 (495) 663-73-58, доб. 20</abbr><br/></div>
                                    <div><abbr title="Техническая поддержка 1С Отчетность"><a href="mailto:#">1c@astralnalog.ru</a></abbr></div>
                                </li>
                                <li>
                                    <div><span>«Электронные торги»</span><br/></div>
                                    <div><abbr title="Электронные торги">+7 (495) 663-73-58, доб. 11</abbr><br/></div>
                                </li>
                                <li>
                                    <div><span>Техподдержка</span><br/></div>
                                    <div><abbr title="Техподдержка">8 (800) 700-86-68</abbr><br/></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 hidden-xs">
                        <h4 class="footer_title">Контакты</h4>
                        <nav class="footer_nav">
                            <ul>
                                <li>
                                    <address id="add-phone">
                                        <b>Остались вопросы?</b><br>
                                        <abbr title="Телефон в Москве"><b>+7 (499) 649-30-42</b></abbr>
                                    </address>
                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">ООО «Астрал-М»</strong><br>
                                        111123, г. Москва, Шоссе Энтузиастов д. 56, стр. 32<br>
                                        офис 211 <br>
                                        <a href="mailto:#">moscow@astralnalog.ru</a>
                                    </address>

                                </li>
                                <li>
                                    <address>
                                        <strong style="font-weight:bold;">Рабочие дни:</strong><br>
                                        Понедельник-Пятница<br>
                                        с 9:00 до 18:00<br>
                                    </address>
                                </li>
                                <li><a href="/contacts/">Все контакты</a></li>
                                <li><a href="/search/map.php">Карта сайта</a></li>
                            </ul>
                        </nav>

                    </div>
                </div>
            </div>
        </div>
        <!-- ARROW FIXED -->
        <div class="arrow_up_fix_none" id="arrow_up"></div>
        <!-- ARROW FIXED -->
        <div class="social">
            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Рабочие дни:</h5>
                <div class="f-social centered">
                    <p class="footer_span">Понедельник-Пятница<br></p>
                    <p class="footer_span">с 9:00 до 18:00</p>
                </div>
            </div>

            <div class="hidden-lg hidden-sm hidden-md visible-xs">
                <h5 class="footer_link">Телефон</h5>
                <div class="f-social">
                    <abbr title="Phone"><b>+7 (499) 649-30-42</b></abbr>
                </div>
            </div>
            <br/>
            <h5 class="footer_link">Мы в социальных сетях</h5>
            <div class="f-social">
                <a href="http://vk.com/astralm" class="social_link social_link_vk" target="_blank">&nbsp;</a>
                <a href="http://facebook.com/astralmoscow" class="social_link social_link_fb" target="_blank">&nbsp;</a>
                <a href="http://twitter.com/MoscowAstral" class="social_link social_link_google" target="_blank">&nbsp;</a>
                <a href="http://www.youtube.com/channel/UCCzvlCiq1AlX_HiH31LXPvg/" class="social_link social_link_youtube" target="_blank">&nbsp;</a>
            </div>
        </div>
        <!-- <a href="#x" class="overlay" id="win1" style="opacity: 1;z-index: 1 !important;cursor: pointer;"></a> -->
    </footer>

</div>




















    
    <script src="libs/fancybox/jquery.fancybox.pack.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery-css-transform.min.js"></script>
    <script src="js/jquery-animate-css-rotate-scale.min.js"></script>
    <script src="js/jquery.quicksand.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>