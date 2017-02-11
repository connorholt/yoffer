<style>
    /* Carousel */

    #quote-carousel {
        padding: 0 10px 30px 10px;
        margin-top: 30px;
        /* Control buttons  */
        /* Previous button  */
        /* Next button  */
        /* Changes the position of the indicators */
        /* Changes the color of the indicators */
    }
    #quote-carousel .carousel-control {
        background: none;
        color: #CACACA;
        font-size: 2.3em;
        text-shadow: none;
        margin-top: 30px;
    }
    #quote-carousel .carousel-control.left {
        left: -60px;
    }
    #quote-carousel .carousel-control.right {
        right: -60px;
    }
    #quote-carousel .carousel-indicators {
        right: 50%;
        top: auto;
        bottom: 0px;
        margin-right: -19px;
    }
    #quote-carousel .carousel-indicators li {
        width: 50px;
        height: 50px;
        margin: 5px;
        cursor: pointer;
        border: 4px solid #CCC;
        border-radius: 50px;
        opacity: 0.4;
        overflow: hidden;
        transition: all 0.4s;
    }
    #quote-carousel .carousel-indicators .active {
        background: #333333;
        width: 128px;
        height: 128px;
        border-radius: 100px;
        border-color: #f33;
        opacity: 1;
        overflow: hidden;
    }
    .carousel-inner {
        min-height: 300px;
    }
    .item blockquote {
        border-left: none;
        margin: 0;
    }
    .item blockquote p:before {
        content: "\f10d";
        font-family: 'Fontawesome';
        float: left;
        margin-right: 10px;
    }
</style>

<header xmlns="http://www.w3.org/1999/html">
    <div class="header-content">
        <div class="header-content-inner">
            <h1 id="homeHeading">Для PHP и Full stack разработчиков</h1>
            <hr>
            <p>
                Лучший ресурс для подготовки к интервью и собеседованию<br />
                Используя сервис yoffer Вы подготовитесь к собеседованию за один вечер!
            </p>
            <a href="/questions" class="btn btn-success btn-xl page-scroll">Начать подготовку</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Для кого подходит сервис?</h2>
                <hr class="light">
                <p class="text-faded">
                    Для Junior и Middle PHP/Full Stack разработчиков, которые готовятся к собеседованиям<br />
                    Используя сервис Yoffer подготовиться к собеседованию можно за один вечер<br />
                    Сервис облегчает подготовку, Вам не нужно искать вопросы которые задают на собеседованиях<br />
                    А также искать на вопросы ответы, в интернете много лишней и ненужной информации
                </p>
                <a href="/questions" class="page-scroll btn btn-default btn-xl sr-button">Посмотреть вопросы</a>
            </div>
        </div>
    </div>
</section>

<section id="services">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Почему выбирают нас</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-trophy text-primary sr-icons"></i>
                    <h3>Качество</h3>
                    <p class="text-muted">
                        Высокое качество вопросов и ответов.
                        Материал собран с настоящих собеседований.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-graduation-cap text-primary sr-icons"></i>
                    <h3>Актуальность</h3>
                    <p class="text-muted">
                        Технологии развиваются и мы постоянно обновляем базу
                        вопросов, а также отслеживаем новые вопросы
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-hourglass-half text-primary sr-icons"></i>
                    <h3>Простота</h3>
                    <p class="text-muted">
                        Ответы объясняются простым и доступным языком.
                        Для подготовки к собеседованию достаточно одного вечера.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-database text-primary sr-icons"></i>
                    <h3>Объем</h3>
                    <p class="text-muted">
                        На нашем сайте собран весь нужный материал для подготовки.
                        Не нужно искать вопросы и ответы, все собрано на нашем сервисе.
                    </p>
                </div>
            </div>
        </div>

        <div class="row" style="margin-top: 40px;">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-search text-primary sr-icons"></i>
                    <h3>Источники</h3>
                    <p class="text-muted">
                        Мы выбрали самое нужное из документаций и конференций.
                        Наши ответы проверены экспертами.
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-users text-primary sr-icons"></i>
                    <h3>Эксперты</h3>
                    <p class="text-muted">
                        Мы сотрудничаем с программистами высокого уровня,
                        для проверки материала и пополнения базы вопросов
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-info text-primary sr-icons"></i>
                    <h3>Советы</h3>
                    <p class="text-muted">
                        Ответы на собеседованиях иногда расходятся с реальной жизнью,
                        в советах мы поделились тем, что пригодится при работе
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-link text-primary sr-icons"></i>
                    <h3>Ссылки</h3>
                    <p class="text-muted">
                        Каждый ответ дополнен ссылками на источники и дополнитеные материалы,
                        чтобы Вы могли освежить свои знания или узнать что-то новое
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<aside class="bg-primary">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Готовьтесь легко и просто</h2>
            <p>Все вопросы разбиты по категориям <br />
               Внутри категорий вопросы отсортированы по сложности</p>
            <a href="/questions" class="btn btn-default btn-xl sr-button">Посмотреть вопросы</a>
        </div>
    </div>
</aside>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12" data-wow-delay="0.2s">
                <div class="carousel slide" data-ride="carousel" id="quote-carousel">
                    <!-- Bottom Carousel Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="https://s3.amazonaws.com/uifaces/faces/twitter/brad_frost/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/rssems/128.jpg" alt="">
                        </li>
                        <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="https://s3.amazonaws.com/uifaces/faces/twitter/adellecharles/128.jpg" alt="">
                        </li>
                    </ol>

                    <!-- Carousel Slides / Quotes -->
                    <div class="carousel-inner text-center">

                        <!-- Quote 1 -->
                        <div class="item active">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Искал информацию при подготовке к собеседованию, и нашел ваш сайт, сначала сам искал ответы на вопросы, но потом понял, что много времени трачу, на то чтобы выбрать среди большого количества информации ответ, многие ответы сбивали меня, и я решил оплатить доступ на сутки. И не пожалел, подготовился за один вечер, сейчас работаю в хорошей компании!</p>
                                        <small>Андрей. Middle php developer</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 2 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Всегда очень волнуюсь на собеседованиях, хотя был на них не один раз. Очень бесит всегда искать вопросы, чтобы освежить какие то мелочи, очень обрадовался когда нашел ваш сайт. Все структурировано, прошелся по вопросам с ответами, освежил память и пошел на собеседование. Многие вопросы совпали, интервьюеры отметили, что я очень хорошо подготовился к собеседованию и предложили оффер! Спасибо вам!</p>
                                        <small>Николай. Web разработчик</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                        <!-- Quote 3 -->
                        <div class="item">
                            <blockquote>
                                <div class="row">
                                    <div class="col-sm-8 col-sm-offset-2">

                                        <p>Я готовилась к своему первому собеседованию, искала вопросы, которые задают в компаниях и нашла ваш сайт. Оплатила доступ, и готовилась, здорово что есть ссылки на материалы и собраны все вопросы, выручили, спасибо вам! Узнала много нового))</p>
                                        <small>Анна. Junior разработчик</small>
                                    </div>
                                </div>
                            </blockquote>
                        </div>
                    </div>

                    <!-- Carousel Buttons Next/Prev -->
                    <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
                    <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="/js/creative.js"></script>