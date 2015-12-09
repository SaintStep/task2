

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
                    <li><a href="#">Способы сдачи ЭО</a></li>
                    <li><a href="#" class="current">On-line</a></li>
                </ul>
            </nav><!-- //Navigation in section -->
            <!-- Block for text 1-->
            <div class="box-text">
                <h2 class="title">Электронная отчетность онлайн</h2>
                <span>Интернет отчетность</span>
                <div class="box-info">
                    <p>Сервисы, размещенные на сайтах всех контролирующих органов РФ, позволяют сдать электронную отчетность через интернет. Что это значит?</p>
                    <p>Для осуществления этой процедуры потребуется создать отчет с использованием программного обеспечения, доступного для скачивания на сайте государственного органа, подписать его электронной подписью и, сформировав транспортный контейнер, передать на проверку. </p>
                    <p>Интернет-отчетность, созданная на сайте контролирующего органа, позволяет сэкономить время, затрачиваемое на распечатку бумажной версии документов и личную передачу их проверяющему специалисту. Кроме того, отчетность через интернет является единственно возможным способом ее передачи в государственные службы для ряда организаций, критерии определения которых установлены действующим законодательством РФ.</p>
                    <p>В случае использования для передачи электронной отчетности интернет-ресурсов, датой ее сдачи считается дата ее отправки с помощью онлайн сервиса. </p>
                </div>
            </div><!-- //Block for text 1-->
            <!-- Block for text 2-->
            <div class="box-text">
                <h3 class="title">Сдать электронную отчетность онлайн</h3>
                <span>Сдать отчетность через интернет</span>
                <div class="box-info">
                    <div class="row clearfix">
                        <div class="col">
                            <p>Сдать отчетность через интернет можно с использованием сервисов, предоставляемых контролирующими органами на их официальных сайтах, однако порядок ее оформления и требования, предъявляемые к процедуре передачи, несколько отличаются:</p>
                            <p>1. Для передачи отчетности в ФНС потребуется воспользоваться сервисом «Представление налоговой и бухгалтерской отчетности в электронном виде», расположенным по адресу <a href="https://www.nalog.ru/rn77/service/pred_elv/">https://www.nalog.ru/rn77/service/pred_elv/</a>.</p>
                            <p>Для работы с системой потребуется:</p>
                            <ul>
                                <li>Приобрести электронную цифровую подпись;</li>
                                <li>Получить идентификатор абонента у оператора электронного документооборота;</li>
                                <li>Загрузить с официального сайта ФНС программное обеспечение под названием «Налогоплательщик ЮЛ», посредством которого осуществляется формирование транспортного контейнера с отчетностью.</li>
                            </ul>
                            <p>2. Для формирования отчетности по пенсионному и медицинскому страхованию в ПФР можно воспользоваться личным кабинетом плательщика, для входа в который нужно перейти по ссылке <a href="http://www.pfrf.ru/eservices/lkp/">http://www.pfrf.ru/eservices/lkp/</a>.</p>
                            <p>3. Передача отчетности в Фонд социального страхования осуществляется при помощи сервиса, находящегося по адресу <a href="http://f4.fss.ru/fss/upload">http://f4.fss.ru/fss/upload</a>. Для отправки документации потребуется зашифровать ее цифровой подписью, и передать готовый файл путем загрузки его в специальную форму на сайте.</p>
                        </div>
                        <div class="col">
                            <figure>
                                <a href="#"><img src="images/EO_TZ-4_1/EO_TZ-4-1__03.png" width="397" height="146" alt="Отчетность в электронном виде" title="Отчетность в электронном виде" /></a>
                                <figcaption>Сервис ФНС «Представление налоговой и бухгалтерской отчетности в электронном виде»</figcaption>
                            </figure>
                            <figure>
                                <a href="#"><img src="images/EO_TZ-4_1/EO_TZ-4-1__06.png" width="397" height="146" alt="Налогоплательщик ЮЛ" title="Налогоплательщик ЮЛ" /></a>
                                <figcaption>Программное обеспечение ФНС под названием «Налогоплательщик ЮЛ»</figcaption>
                            </figure>
                            <figure>
                                <a href="#"><img src="images/EO_TZ-4_1/EO_TZ-4-1__08.png" width="397" height="146" alt="ПФ" title="ПФ" /></a>
                                <figcaption>Личный кабинет плательщика на сайте ПФР </figcaption>
                            </figure>
                            <figure>
                                <a href="#"><img src="images/EO_TZ-4_1/EO_TZ-4-1__10.png" width="397" height="146" alt="Фонд Социального страхования" title="Фонд Социального страхования" /></a>
                                <figcaption>Сервис для передачи отчетности в Фонд социального страхования</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div><!-- //Block for text 2-->
            <!-- Block for text 3-->
            <div class="box-text">
                <h3 class="title lh-xs">Процедура сдачи отчетности с помощью он-лайн <br>сервисов, предоставляемых контролирующими <br>органами</h3>
                <span>Схема сдачи ЭО на сайтах госсударственных учреждений</span>  
                <div class="box-info">
                    <p>В общем виде процесс сдачи отчетности выглядит следующим образом:</p>
                </div>
                <div class="scheme-wrap clearfix">
                    <div class="scheme-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__16.png" width="110" height="103" alt="Получение ЭЦП" title="Получение ЭЦП">
                        </div>
                        <p>1. Получение ЭЦП</p>
                    </div>
                    <div class="scheme-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__18.png" width="111" height="103" alt="Получение ЭЦП" title="Получение ЭЦП">
                        </div>
                        <p>2. Заключение договора с контролирующим органом о сдаче отчетности в электронном виде</p>
                    </div>
                    <div class="scheme-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__20.png" width="111" height="103" alt="Получение ЭЦП" title="Получение ЭЦП">
                        </div>
                        <p>3. Загрузка и установка программного обеспечения для формирования и передачи отчетности с офицального сайта госсударственного органа</p>
                    </div>
                    <div class="scheme-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__22.png" width="112" height="103" alt="Получение ЭЦП" title="Получение ЭЦП">
                        </div>
                        <p>4. Формирование и передача документации</p>
                    </div>
                    <div class="scheme-item">
                        <div class="item no-after">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__13.png" width="128" height="103" alt="Получение ЭЦП" title="Получение ЭЦП">
                        </div>
                        <p>5. Получение ответа от представителя госсударственной службы</p>
                    </div>
                </div> 
            </div><!-- //Block for text 3-->
            <!-- Block for text 4-->
            <div class="box-text clearfix">
                <h3 class="title">Схема отправки ЭО на сайтах гос. учреждений</h3>
                <span>Общий вид отправки отчетности выглядит следующим образом:</span>  
                <div class="delivery-wrap clearfix">
                    <div class="delivery-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__34.png" width="228" height="152" alt="Создание" title="Создание">
                        </div>
                        <div class="item-bottom clearfix">
                            <img src="images/EO_TZ-4_1/1.png" width="34" height="59" alt="1" title="1">
                            <p>Создание<br>электронной<br>отчетности</p>
                        </div>
                    </div>
                    <div class="delivery-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__36.png" width="213" height="152" alt="Отправление" title="Отправление">
                        </div>
                        <div class="item-bottom clearfix">
                            <img src="images/EO_TZ-4_1/2.png" width="34" height="59" alt="2" title="2">
                            <p>Формирование транспортного контейнера и загрузка его на сайт</p>
                        </div>
                    </div>
                    <div class="delivery-item">
                        <div class="item">
                            <img src="images/EO_TZ-4_1/EO_TZ-4-1__38.png" width="169" height="152" alt="Получение" title="Получение">
                        </div>
                        <div class="item-bottom clearfix">
                            <img src="images/EO_TZ-4_1/3.png" width="34" height="59" alt="3" title="3">
                            <p>Получение<br>подтверждения факта принятия отчетности</p>
                        </div>
                    </div>
                </div>
                <div class="article-info clearfix">
                    <img src="images/EO_TZ-4_1/EO_TZ-4-2__30.png" width="69" height="70" alt="дополнительная информация" title="дополнительная информация">
                    <div class="text">
                        <p>Несмотря на то, что контролирующие органы предоставляют возможность сдачи отчетности в электронном виде с помощью официального программного обеспечения, бесплатно распространяемого в сети интернет, использование специализированных программ является более простым и надежным способом для формирования и передачи документов.</p>
                        <p>Во-первых, такое ПО позволяет сдавать отчетность через интернет во все без исключения проверяющие инстанции.</p>
                        <p>Во-вторых, каждый его пользователь получает консультационную и техническую поддержку на протяжении всего периода использования программы.</p>
                        <a href="#">Программы сдачи отчетности</a>
                    </div>
                </div>
                <a href="#" class="btn body">Заказать ЭО</a> 
            </div><!-- //Block for text 4-->
            <!-- Block for text 5-->  
            <div class="box-text">
                <h3 class="title">Программы электронной отчетности</h3>
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
                            <p>Астрал-Отчет, являющийся программным продуктом компании ЗАО «Калуга Астрал», разработан с целью реализации процедуры формирования электронной отчетности и передачи ее на проверку с помощью интернета.</p>
                            <p>Программа позволяет создавать документы, отвечающие требованиям действующего законодательства, импортировать необходимые данные из 1С и ряда других широко распространенных программ, а также отправлять заверенную цифровой подписью документацию в контролирующие органы.</p>
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
                            <p>1С-Отчетность – это еще один программный продукт, являющийся результатом деятельности группы разработчиков ЗАО «Калуга Астрал».</p>
                            <p>Особенностью этой программы является то, что она не импортирует данные из 1С, а сама встраивается в ее программную среду.</p>
                            <p>Функционал программы позволяет сдавать отчетность в ФНС, ПФР, ФСС, Росалкогольрегулирование, Росстат и Росприроднадзор. Существует возможность подключения СМС-уведомлений о ходе проверки отчетности и ее результатах.</p>
                        </div>
                    </div>
                    <!-- Block with form and description -->
                    <div class="form-box">
                        <div class="row clearfix">
                            <h3 class="title">Мы можем подобрать Вам наиболее выгодный тариф по электронной отчетности</h3>
                            <div class="col-lg-7 col-md-7 col-sm-7">
                                <div class="box-info clearfix">
                                    <p>Для того чтобы приобрести программное обеспечение, разработанное ЗАО «Калуга Астрал», необходимо:</p>
                                    <ul>
                                        <li>оставить заявку на сайте компании;</li>
                                        <li>с помощью менеджера подобрать оптимальный программный пакет, обладающий всем необходимым функционалом;</li>
                                        <li>лично предоставить в подразделение компании документы, подтверждающие факт наличия у заявителя ЭЦП, паспорт, копию ОГРН/ОГРНИП и выписку из учредительных документов организации, подтверждающую факт обладания заявителем полномочий на работу с ЭЦП и передачу отчетной документации в контролирующие органы.</li>
                                    </ul>
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
            </div><!-- //Block for text 5-->
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