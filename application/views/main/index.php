<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Ai-Academy</title>

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="assets/css/images/it.png">
    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Lato:400,700">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/form-elements.css">
    <link rel="" href="assets/css/font.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">
    <link rel="apple-touch-icon-precomposed" href="asset/ico/apple-touch-icon-57-precomposed.png">
    <!--    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">-->
    <!--    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">-->

    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.start').click(function(){
                var sled = $('.slide').prev();
                var perv = $('.mySlides:first');
                var posled = $('.mySlides:last');


                if (perv.hasClass('slide')){
                    $('.mySlides').removeClass('slide');
                    posled.addClass('slide');
                }
                else{
                    $('.mySlides').removeClass('slide');
                    sled.addClass('slide');
                }
                setTimeout(function(){ $('.start').trigger('click');},3000);
            });
            setTimeout(function(){ $('.start').trigger('click');},3000);

            $('.row').on('click','.panel-heading',function(){
                var item = $(this).next();
                var val1 = $('#accord:checked').val();
                //var state = item.is(':hidden');
                if(val1) {
                    $('.panel-body').hide();
                }
                item.toggle(1000);
            });
        });
    </script>
    <style>

    </style>
</head>
<body>
    <!-- Top menu -->
    <nav>
        <a class="scroll-link" href="#top-content">Top</a>
        <a class="scroll-link" href="#what-we-do">об аналитике данных</a>
        <a class="scroll-link" href="#process">для кого данный курс</a>
        <a class="scroll-link" href="#portfolio">результаты курса</a>
        <a class="scroll-link" href="#testimonials">основные модули курса</a>
        <a class="scroll-link" href="#team">тренеры курса</a>
        <a class="scroll-link" href="#contact">забронировать место</a>
        <div class="hide-menu">
            <a href=""><i class="fa fa-bars"></i></a>
        </div>
    </nav>
    <div class="show-menu">
        <a href=""><i class="fa fa-bars"></i></a>
    </div>

    <!-- Top content -->
    <div class="top-content">
        <div class="top-content-text wow fadeInUp">
            <div class="header_logo" style="display: flex; justify-content: space-between;">
                <img src="assets/css/images/it.png" style="width: 60px; height: 50px;" alt="">
                <span>Artificial intelligence</span>
            </div>
            <div class="divider-2"><span></span></div>
            <h1><a href="">Ai-Academy </a></h1>
            <div class="divider-2"><span></span></div>
            <p>Академия искусственного интеллекта при поддержке It-Academy</p>
            <p><b>СТАРТ:13 ДЕКАБРЯ</b></p>
            <div class="timer-down">
                <p><b>УСПЕЙ ЗАРЕГИСТРИРОВАТЬСЯ ДО НАЧАЛА КУРСОВ</b></p>
                <script src="http://megatimer.ru/s/f2708b180478cc821420efabd3b2d18a.js"></script>
            </div>
            <div class="top-content-bottom-link">
                <a class="big-link-1" href="#">Заполнить анкету!</a>
            </div>
        </div>
    </div>

    <!-- What we do -->
    <div class="what-we-do-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 what-we-do section-description wow fadeIn">
                    <h2>ОБ АНАЛИТИКЕ ДАННЫХ</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Сегодня профессия дата-аналитика считается одной из самых привлекательных и перспективных в мире. Чтобы стать хорошим аналитиком, нужно больше разбираться в статистике, чем в программировании, потому что во время работы приходится строить математические модели, которые опишут проблему и фактические данные.
                        Дата-аналитик работает со случайными величинами и вероятностными моделями, его задача — найти неожиданные закономерности. Поэтому знание теории вероятностей и математической статистики — одно из главных требований к соискателям.
                        Также необходимо знать языки программирования R или Python и иметь представление о технологиях обработки больших данных. Этих знаний достаточно, чтобы претендовать на начальную позицию дата-аналитика.

                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 what-we-do-box wow fadeInUp">
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics">
                        <div class="what-we-do-box-icon"><i class="fa bug_report"></i>
                            <img src="assets/css/images/machine-learning.png" style="width: 60px; height: 50px;" alt="">
                        </div>
                    </a>
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics"><h3>Machine Learning</h3></a>
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics"><p>Аналитик Данных (Data Analyst) – стажер - от 40 000 до 70 000 руб. на руки </p></a>
                </div>
                <div class="col-sm-4 what-we-do-box wow fadeInUp">
                    <a href="https://hh.ru/vacancy/28109186?query=data%20analyst">
                        <div class="what-we-do-box-icon"><i class=""></i>
                            <img src="assets/css/images/big-data.png" style="width: 60px; height: 50px;" alt="">
                        </div>
                    </a>
                    <a href="https://hh.ru/vacancy/28109186?query=data%20analyst"><h3>Big Data </h3></a>
                    <a href="https://hh.ru/vacancy/28109186?query=data%20analyst"><p>Аналитик данных (data analyst/ data scientist) от 60 000 до 100 000 руб.</p></a></div>
                <div class="col-sm-4 what-we-do-box wow fadeInDown">
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics">
                        <div class="what-we-do-box-icon"><i class=""></i>
                            <img src="assets/css/images/data-mining.png" style="width: 60px; height: 50px;" alt="">
                        </div>
                    </a>
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics"><h3>Data Mining </h3></a>
                    <a href="https://career.ru/vacancy/28378458?query=data%20analytics"><p>Аналитик данных (data analyst/ data scientist) от 90 000 до 130 000 руб.</p></a> </div>

            </div>
        </div>
    </div>

    <!-- Our process -->
    <div class="block-1-container process-container section-container section-container-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 block-1 section-description wow fadeIn">
                    <h2>ДЛЯ КОГО ДАННЫЙ КУРС?</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Наш курс позволяет освоить Python для анализа данных с нуля.
                        Курс рассчитан на тех, кто имеет базовые навыки программирования на R или Python.
                        Мы собрали только те инструменты, которые потребуются вам для решения аналитических задач.
                    </p>
                </div>
            </div>
            <div class="row">
                <section class=" SlideShow col-sm-6 block-1-left wow fadeInLeft">
                    <span class="start"></span>
                    <!-- <SlideShow> -->
                    <div >
                        <img class="mySlides" src="assets/css/images/2.jpg" style="width:100%;height:100%;">
                        <img class="mySlides slide" src="assets/css/images/1.jpg" style="width:100%;height:100%;">
                        <img class="mySlides" src="assets/css/images/4.jpg" style="width:100%;height:100%;">
                        <img class="mySlides" src="assets/css/images/3.jpg" style="width:100%;height:100%;">
                        <div id="slides"></div>
                    </div>
                </section>
    <!--            <div id="myCarousel" class="col-sm-6 block-1-left wow fadeInLeft">-->
    <!--                <div class="slider-1-box slider-1-our-process">-->
    <!--                    <img class="slider-1-img-active" src="assets/css/images/1.jpg" alt="" >-->
    <!--                    <img id="" src="assets/css/images/2.jpg" alt="" >-->
    <!--                    <div id="slide" class="slider-1-nav"></div>-->
    <!--                </div>-->
    <!--            </div>-->
                <div class="col-sm-6 block-1-right wow fadeInUp">
                    <h3>В чем разница простого аналитика от аналитика с Python?</h3>
                    <h3>Аналитик</h3>
                    <p>Обрабатывает 10 000 строк Exсel вручную,
                        анализирует метрики и готовит отчет. Весь процесс займет неделю или больше.</p>
                    <h3>Аналитик с Python</h3>
                    <p>Пишет скрипт, который обрабатывает данные,
                        составляет отчет и отправляет его на почту руководителю. Процесс займет 2-3 часа.</p>
                    <h3>В чем разница простого Digital - Mаркетологa от Mаркетологa с Python?</h3>
                    <h3>Digital - Mаркетолог</h3>
                    <p>Анализирует 50 страниц сайта, выискивая ключевые слова. Вручную пишет аудит - анализ.</p>
                    <h3>Маркетолог с Python</h3>
                    <p>Запускает скрипт, получает готовый аудит - анализ, отправляет клиенту. Идет заниматься другими делами.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- about course -->
    <div class="clients-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 clients wow fadeInUp">
                    <div class="col-sm-3 counter-box wow fadeInUp">
                        <h3>длительность и стоимость курса: </h3>
                        <p></p>
                    </div>
                    <div class="col-sm-3 counter-box wow fadeInUp">
                        <h3>формат</h3>
                        <p>Обучение в группах</p>
                    </div>
                    <div class="col-sm-3 counter-box wow fadeInDown">
                        <h3>длительность </h3>
                        <p>16 недель  </p>
                    </div>
                    <div class="col-sm-3 counter-box wow fadeInUp">
                        <h3>по завершению </h3>
                        <p>Сертификат</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Price -->
    <div class="counters-container section-container section-container-full-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-3 counter-box wow fadeInDown">
                    <h3></h3>
                    <p></p>
                </div>
                <div class="col-sm-3 counter-box wow fadeInDown">
                    <h3>20 000 сом в месяц <br> до 30 ноября</h3>
                    <p></p>
                </div>
                <div class="col-sm-3 counter-box wow fadeInDown">
                    <h3>25 000 сом в месяц <br> с 1 декабря</h3>
                    <p></p>
                </div>
                <div class="col-sm-3 counter-box wow fadeInDown">
                    <h3></h3>
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <!--example-->
    <div class="guarantee__career-block">
        <br>
        <h2>КРИТЕРИИ К АУДИТОРИИ КУРСА:</h2>
        <div class="guarantee__career-item">
            <div class="career-item">
                <div class="career__item-img">
                    <img src="assets/css/images/cpp_java_python.png" alt="project">
                </div>
                <div class="career__title">- Программирование:</div>
                <div class="career__post-title">
                    вам необходимо знать языки программирования,<br>
                    такие как Python, C / C ++, SQL или Java
                </div>
            </div>
           <div class="career-item">
                <div class="career__item-img">
                    <img src="assets/css/images/460px-Points_and_vectors.svg.png" alt="work">
                </div>
                <div class="career__title"> Многовариантное исчисление и линейная алгебра.</div>
                <div class="career__post-title">
					Основное многовариантное исчисление или вопросы линейной алгебры, поскольку они составляют основу многих этих методов.
                </div>
            </div>
            <div class="career-item">
                <div class="career__item-img">
                     <img src="assets/css/images/Standard_deviation_diagram.svg.png" alt="knowledge">
                </div>
                <div class="career__title">Статистика:</div>
                <div class="career__post-title">
                    владение статистическими распределениями и<br>
                    теорией вероятности (вычисление MGF, CGF, среднее значение,<br>
                    медиана, режим, максимальная вероятность)
                </div>
            </div>
        </div>
        <div class="guarantee__career-icons">
            <div class="career-icons">
                <img src="" alt="">
            </div>
            <div class="career-icons">
                <img src="" alt="">
            </div>
            <div class="career-icons">
                <img src="" alt="">
            </div>
        </div>
    </div>
    <!-- Result course -->
    <div class="portfolio-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 portfolio section-description wow fadeIn">
                    <h2>РЕЗУЛЬТАТЫ КУРСА:</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Выпускники курса Data Analytics будут
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-filters wow fadeInUp">
                    <a href="#" class="filter-all active">  </a>
                    <a href="#" class="filter-design"> знать:</a> /
                    <a href="#" class="filter-development">уметь: </a>/
                    <a href="#" class="filter-branding">владеть: </a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 portfolio-masonry">
                    <div class="portfolio-box design">
                        <div class="col-sm-12 course-box wow fadeInUp">
                            <h4>Выпускники курса Data Analytics будут знать:</h4>
                            <p>
                                − фундаментальные понятия и методы теории распознавания по прецедентам и анализа данных;<br>
                                − современные проблемы анализа данных, теории распознавания, классификации, поиска зависимостей;<br>
                                − методы и подходы решения практических задач анализа данных и классификации коллективами алгоритмов;<br>
                                − программные средства решения основных задач анализа данных и классификации;
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-box development">
                        <div class="col-sm-12 course-box wow fadeInUp">
                            <h4>Выпускники курса Data Analytics будут уметь:</h4>
                            <p>
                                − пользоваться своими знаниями для решения фундаментальных, прикладных и технологических задач в различных предметных областях;<br>
                                − делать правильные выводы из сопоставления результатов теории и эксперимента, выбирать правильно параметры методов, адекватные размерности обучающих выборок; <br>
                                − делать качественные и количественные выводы при переходе к предельным условиям в изучаемых проблемах;<br>
                                − осваивать новые предметные области, теоретические подходы и экспериментальные методики;<br>
                                − получать оптимальные алгоритмы классификации и правильно оценивать степень их точности и достоверности;<br>
                                − работать на современном экспериментальном оборудовании;<br>
                                − планировать оптимальное проведение обучения по прецедентам;<br>
                                − эффективно использовать информационные технологии и компьютерную технику для достижения необходимых теоретических и прикладных результатов.
                            </p>
                        </div>
                    </div>
                    <div class="portfolio-box branding">
                        <div class="col-sm-12 course-box wow fadeInUp">
                            <h4>Выпускники курса Data Analytics будут владеть:</h4>
                            <p>
                                − навыками анализа большого объема частично противоречивых и неполных признаковых описаний;<br>
                                − навыками самостоятельной работы в лаборатории с использованием современных компьютерных технологий;<br>
                                − культурой постановки и планирования последовательности решения задач анализа данных и классификации;<br>
                                − навыками грамотной обработки статистических многомерных данных, оформления результатов численных расчетов и их сопоставления с теоретическими оценками;<br>
                                − практикой исследования и решения теоретических и прикладных задач;<br>
                                − навыками анализа реальных задач из различных предметных областей на уровне отдельных подходов и коллективами алгоритмов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course Modules -->
    <div class="testimonials-container section-container section-container-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 testimonials section-description wow fadeInUp">
                    <h2>ОСНОВНЫЕ МОДУЛИ КУРСА:</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <h4>
                        Курс состоит из 13 кейсов. Разбирая каждый из них, вы постепенно будете осваивать все компетенции,
                        после каждого кейса получая скрипты для использования в будущей работе.
                    </h4>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4 class="panel-title" style="width: 100%!important;">
                                <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion" href="#collapse">
                                    <span> Модуль от 1 - 4 </span>
                                    <span class="strel"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse1" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <span style="font-weight: bold;font-size: 16px"> </span>
                                <div class="post_commentbox" style="margin-bottom: 0">
                                    <a href="">
                                        <p>1.	Основные понятия. Модели распознавания, основанные на принципе частичной прецедентности</p>
                                        <p>2.	Информативность признаков и эталонов, методы оценки информативности.</p>
                                        <p>3.	Логические закономерности классов, их поиск и применение в задачах классификации</p>
                                        <p>4.	Модели распознавания, основанные на построении бинарных решающих деревьев</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title" style="width: 100%!important;">
                                <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion" href="#collapse">
                                    <span> Модуль от 5 - 8 </span>
                                    <span class="strel"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse2" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <span style="font-weight: bold;font-size: 16px"> </span>
                                <div class="post_commentbox" style="margin-bottom: 0">
                                    <a href="">
                                        <p>5.	Алгоритмы распознавания, основанные на построении линейных и кусочно-линейных разделяющих поверхностей</p>
                                        <p>6.	Модели распознавания, основанные на построении нелинейных разделяющих поверхностей</p>
                                        <p>7.	Нейросетевые модели классификации</p>
                                        <p>8.	ROC-анализ и AUC- оптимальные классификаторы.</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="panel-heading">
                            <h4 class="panel-title" style="width: 100%!important;">
                                <a class="accordion-toggle " data-toggle="collapse" data-parent="#accordion" href="#collapse">
                                    <span> Модуль от 9 - 13 </span>
                                    <span class="strel"></span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse3" class="panel-collapse collapse ">
                            <div class="panel-body">
                                <span style="font-weight: bold;font-size: 16px"> </span>
                                <div class="post_commentbox" style="margin-bottom: 0">
                                    <a href="">
                                        <p>9.	Статистическая и алгебраическая теория распознавания</p>
                                        <p>10.	Система анализа данных и классификации</p>
                                        <p>11.	Кластерный анализ. </p>
                                        <p>12. Kлассификация объектов с неполными признаковыми описаниями, с большим числом классов</p>
                                        <p>13.	Нахождение функциональных зависимостей по прецедентам</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- banner -->
    <div class="our-motto-container section-container section-container-full-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 our-motto section-description wow fadeInLeftBig">
                    <div class="container bg-3 text-center">
                        <div class="testimonial-active"></div>
                        <div class="features-cards__img features-cards__img--clock"></div>

                        <div class="testimonial-single">
                            <p>БОЛЬШЕ ВРЕМЕНИ<br>на саморазвитие, проекты, семью, хобби или просто отдых<br></p>
                            <div class="testimonial-single-image">
                                <img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
                            </div>
                        </div>
                        <div class="testimonial-single">
                            <p>НЕТ РУТИНЫ<br>ее делают программные алгоритмы Python</p>

                            <div class="testimonial-single-image">
                                <img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
                            </div>
                        </div>
                        <div class="testimonial-single">
                            <p>
                                ОБУЧЕНИЕ НА РЕАЛЬНЫХ КЕЙСАХ<br>
                                Особенность курса - обучение на основе реальных кейсов. Максимум практики, минимум теории.
                            </p>
                            <div class="testimonial-single-image">
                                <img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
                            </div>
                        </div>
                        <div class="testimonial-single">
                            <p>
                                БЫСТРЫЙ РЕЗУЛЬТАТ<br>
                                получите необходимые данные в 5 раз быстрее
                            </p>
                            <div class="testimonial-single-image">
                                <img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
                            </div>
                        </div>
                        <div class="testimonial-single">
                            <p>
                                РЕАЛЬНЫЕ ПРОЕКТЫ<br>
                                Пополнение портфолио реально выполненными интересными проектами
                            </p>
                            <div class="testimonial-single-image">
                                <img src="assets/img/testimonials/5.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- course treners -->
    <div class="team-container section-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 team section-description wow fadeIn">
                    <h2>ТРЕНЕРЫ КУРСА</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Во множестве технологических компаний Python является обязательным пунктом требований к кандидату
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 team-box wow fadeInUp">
                    <div class="team-photo">
                        <img src="assets/img/about/1.jpg" alt="" data-at2x="assets/img/about/1.jpg">
                    </div>
                    <h3>Азамат Кибекбаев </h3>
                    <p>Азамат Кибекбаев получил степень бакалавра в Университете Фатиха в 2011 году и магистерскую степень
                        того же Университета в 2013 году в области индустриальной инженерии.
                        Он также проходит обучение PhD в данной области по направлению “Машинное обучение” в
                        Университете Озйегин с 2013 года. Азамат проводил исследования в области больших данных в
                        банковских и медицинских системах. Большая часть его работы была направлена на улучшение
                        банковской системы в основном за счет применения интеллектуального анализа данных,
                        статистики и оценки эффективности.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 team-box wow fadeInDown">
                    <div class="team-photo">
                        <img src="assets/img/about/2.jpg" alt="" data-at2x="assets/img/about/2.jpg">
                    </div>
                    <h3>Артем Беляев</h3>
                    <p>Артем Беляев, коммерческий Директор ОсОО "TimelySoft", старший разработчик в TeleDynamicX Limited,
                        Paphos. Сертифицированный специалист Microsoft, имеет более 14 лет опыта разработки ПО
                        (включая участие в национальных и региональных проектах) и более 16 лет опыта преподавания
                        в университете.
                    </p>
                    <div class="team-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 team-box wow fadeInUp">
                    <div class="team-photo">
                        <img src="assets/img/about/3.jpg" alt="" data-at2x="assets/img/about/3.jpg">
                    </div>
                    <h3>Саша Акеев</h3>
                    <p> получил степень бакалавра в Университете Фатиха в 2011 году и магистерскую степень
                        того же Университета в 2013 году в области индустриальной инженерии.
                        Он также проходит обучение PhD в данной области по направлению “Машинное обучение” в
                        Университете Озйегин с 2013 года. Азамат проводил исследования в области больших данных в
                        банковских и медицинских системах.</p>
                    <div class="team-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- booking place -->
    <div class="contact-container section-container section-container-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 contact section-description wow fadeIn">
                    <h2>СТАРТ 13 ДЕКАБРЯ!</h2>
                    <div class="divider-1 wow fadeInUp"><span></span></div>
                    <p>
                        Наш специалист свяжется с вами, чтобы рассказать о деталях курса и ответить на возникшие вопросы
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12 contact-form wow fadeInLeft">
                    <form role="form" action="assets/contact.php" method="post">
                        <div class="form-group">
                            <label class="sr-only" for="contact-subject">ВАШЕ ИМЯ:</label>
                            <input type="text" name="subject" placeholder="ВАШЕ ИМЯ..." class="contact-subject" id="contact-subject">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-phone">ТЕЛЕФОН</label>
                            <input type='text' pattern='[\+]\d{3}[\(]\d{3}[\)]\d{3}[\-]\d{3}' class="contact-phone" title='Phone Number' placeholder="ТЕЛЕФОН: +996(999)999-999">
                        </div>
                        <div class="form-group">
                            <label class="sr-only" for="contact-email">Email</label>
                            <input type="text" name="email" placeholder="Email..." class="contact-email" id="contact-email">
                        </div>
    <!--                    <div class="form-group">-->
    <!--                        <label class="sr-only" for="contact-message">Message</label>-->
    <!--                        <textarea name="message" placeholder="Message..." class="contact-message" id="contact-message"></textarea>-->
    <!--                    </div>-->
                        <button type="submit" class="btn">ЗАБРОНИРОВАТЬ МЕСТО</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to top -->
    <div class="section-container section-container-gray">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="scroll-to-top">
                        <a class="scroll-link" href="#top-content"><i class="fa fa-chevron-up"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <section>
                    <div class="center">
                        <div class="partners">
                            <h1>партнеры</h1>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner1.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner2.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner3.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner4.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner5.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner6.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner7.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner8.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner9.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner10.png">
                            </a>
                            <a href="#" target="_blank">
                                <img src="assets/img/partners/partner11.png">
                            </a>
                        </div>
                    </div>
                    <div class="footer">
                        <div class="footer-menu">
                            <a href="" target="_blank">О проекте</a>
                            <a href="" target="_blank">Материалы для учителя</a>
                            <a href="" target="_blank">Правила викторины</a>
                        </div>
                        <div class="footer-contact">
                            <div class="contact">
                                Для учеников, преподавателей и родителей<br>
                                <a href="#">contact@it-academy.kg</a>
                            </div>
                            <div class="contact sec">
                                Для контакотов с прессой<br>
                                <a href="#">info@it-academy.kg</a>
                            </div>
                        </div>
                        Организатор проекта: Благотворительный фонд Сбербанка «Вклад в будущее». ОГРН 1157700017518<br>

                        "Академия искусственного интеллекта" для школьников не является образовательной услугой, подлежащей лицензированию, и не предполагает выдачу сертификата государственного образца<br><br>

                        ** Подробные условия получения и реализации «Сертификата на мечту» указаны в
                        <a href="#">«Правилах проведения обучающего соревнования в рамках проекта Академия искусственного интеллекта - AI Academy Contest».</a>

                    </div>
                </section>
<!--                <div class="col-sm-7 footer-copyright">-->
<!---->
<!--                </div>-->
<!--                <div class="col-sm-5 footer-social">-->
<!--                    <a href="#"><i class="fa fa-facebook"></i></a>-->
<!--                    <a href="#"><i class="fa fa-dribbble"></i></a>-->
<!--                    <a href="#"><i class="fa fa-twitter"></i></a>-->
<!--                    <a href="#"><i class="fa fa-google-plus"></i></a>-->
<!--                    <a href="#"><i class="fa fa-pinterest"></i></a>-->
<!--                </div>-->
            </div>
        </div>
    </footer>
</body>

<!-- Javascript -->
<script src="assets/js/jquery-1.11.1.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.backstretch.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/retina-1.1.0.min.js"></script>
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script src="assets/js/masonry.pkgd.min.js"></script>
<script src="assets/js/scripts.js"></script>

</html>
