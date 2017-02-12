<style>


    /*
    Author: Bootstrapthemes
    Author URI: http://bootstrapthemes.co
    */


    /* ==========================================================================
       Author's custom styles
       ========================================================================== */


    .p-top-100{
        padding:100px 0;
    }
    .m-top-40{
        margin-top: 40px;
    }




    /*=================================================
    Pricint fiv
    ===================================================*/
    .bs-five-area{
        width:100%;
        display: inline-block;
        box-shadow: 0px 0px 6px 0px #ddd;
        overflow: hidden;
        position: relative;
        font-family: 'Open Sans', sans-serif;
        text-align: center;
    }

    .bs-five-area.bs-radius{
        border-radius: 30px;
    }
    .bs-five-area > div{
        padding:0;
    }


    .bs-five-area .bs-five{
        position: relative;
        width: 100%;
        margin: auto;
        transition: all 0.4s;
        padding:20px 0px;
    }
    .bs-five-area .bs-five h6{
        font-weight: 700;
        letter-spacing: 2px;
    }
    .bs-five-area .bs-five h1{
        font-size:64px;
        font-weight: 100;
        line-height: 72px;
    }
    .bs-five-area .bs-five h1 sup{
        font-size:30px;
        top:-30px;
    }
    .bs-five-area .bs-five ul {
        margin:0;
        padding:0;
        list-style: none;
    }
    .bs-five-area .bs-five ul li{
        line-height: 45px;
        border-bottom:0px;
    }


    .bs-five-area .bs-five:hover{

        background: #5cb85c;
        transition: all 0.4s;

    }

    .bs-five-area .bs-five.active {
        background: #5cb85c;
    }

    .bs-five-area .bs-five .btn-success{
        padding: 10px 50px;
        display: inline-block;
        border-radius: 30px;
        background-color: #5cb85c;
        border-color: #5cb85c;
    }


    .bs-five-area .bs-five.active .btn.btn-success,
    .bs-five-area .bs-five:hover.bs-five .btn.btn-success{
        background: #E0FFF6 ;
        color:#444 ;

    }

    .bs-five-area .bs-five.active,
    .bs-five-area .bs-five.active ul li,
    .bs-five-area .bs-five:hover.bs-five,
    .bs-five-area .bs-five:hover.bs-five ul li
    {
        color:#fff;
    }












    /*copyright
    ==================*/
    .footer{
        background-color: #333;
    }
    .copyright{
        padding: 20px 10px;
    }
    .copyright p {
        font-size:12px;
        color:#fff;
    }
    .copyright p i {
        padding: 0px 5px;
        color: red;
    }
    .copyright p a {
        padding: 0px 5px;
        color: yellow;
    }

    header {
        min-height: 300px !important;
    }
    .stepwizard-step p {
        margin-top: 10px;
    }

    .process-row {
        display: table-row;
    }

    .process {
        display: table;
        width: 100%;
        position: relative;
    }

    .process-step button[disabled] {
        opacity: 1 !important;
        filter: alpha(opacity=100) !important;
    }

    .process-row:before {
        top: 50px;
        bottom: 0;
        position: absolute;
        content: " ";
        width: 100%;
        height: 1px;
        background-color: #ccc;
        z-order: 0;

    }

    .process-step {
        display: table-cell;
        text-align: center;
        position: relative;
    }

    .process-step p {
        margin-top:10px;

    }

    .btn-circle {
        width: 100px;
        height: 100px;
        text-align: center;
        padding: 6px 0;
        font-size: 12px;
        line-height: 1.428571429;
        border-radius: 15px;
    }
</style>
<section id="bs-pricing-five" class="bs-pricing-five bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Как это работает?</h2>
                <hr class="primary">
            </div>
            <div class="bs-five-area bs-radius">
                <div class="container">
                    <div class="process">
                        <div class="process-row">
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-credit-card fa-3x"></i></button>
                                <p>Оплатите доступ</p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-comments-o fa-3x"></i></button>
                                <p>Войдите в кабинет</p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-default btn-circle" disabled="disabled"><i class="fa fa-thumbs-up fa-3x"></i></button>
                                <p>Подготовьтесь к собеседованию</p>
                            </div>
                            <div class="process-step">
                                <button type="button" class="btn btn-success btn-circle" disabled="disabled"><i class="fa fa-dollar fa-3x"></i></button>
                                <p>Получите оффер</p>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<section id="bs-pricing-five" class="bs-pricing-five bg-white">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Выберите нужный тариф</h2>
                <hr class="primary">
            </div>
            <div class="bs-five-area bs-radius">
                <div class="col-md-3 no-padding">
                    <div class="bs-five">
                        <h6 class="text-uppercase">Бесплатно</h6>
                        <h1 class="bs-caption">0<sup>руб.</sup></h1>
                        <p>По времени не ограничено</p>
                        <ul style="height: 255px">
                            <li>Список вопросов</li>
                            <li>Ограниченное количество ответов</li>
                            <li> </li>
                            <li> </li>
                            <li> </li>
                        </ul>
                        <a href="/questions" class="btn btn-success btn-round m-top-40">К вопросам</a>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="bs-five active">
                        <h6 class="text-uppercase">Временный</h6>
                        <h1 class="bs-caption">99<sup><strike>299</strike> руб.</sup></h1>
                        <p>Доступ на 24 часа</p>

                        <ul style="height: 255px">
                            <li>Список вопросов и задач</li>
                            <li>Все вопросы с ответами и решениями</li>
                            <li>Ссылки на дополнительные материалы</li>
                            <li> </li>
                            <li> </li>
                        </ul>
                        <a href="/pay/1" class="btn btn-success btn-round m-top-40">Получить доступ</b></a>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                      <div class="bs-five">
                        <h6 class="text-uppercase">Стандарт</h6>
                        <h1 class="bs-caption">499<sup>руб.</sup></h1>
                        <p>Доступ на 3 месяца</p>

                        <ul style="height: 255px">
                            <li>Список вопросов и задач</li>
                            <li>Все вопросы с ответами и решениями</li>
                            <li>Ссылки на дополнительные материалы</li>
                            <li>Обновление базы материалов</li>
                            <li> </li>
                        </ul>
                        <a href="/pay/2" class="btn btn-success btn-round m-top-40">Получить доступ</a>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                    <div class="bs-five">
                        <h6 class="text-uppercase">Максимальный</h6>
                        <h1 class="bs-caption">999<sup>руб.</sup></h1>
                        <p>Доступ на 12 месяцев</p>

                        <ul style="height: 255px">
                            <li>Список вопросов и задач</li>
                            <li>Все вопросы с ответами и решениями</li>
                            <li>Ссылки на дополнительные материалы</li>
                            <li>Обновление базы материалов</li>
                            <li>Доступ к pdf версии</li>
                        </ul>
                        <a href="/pay/3" class="btn btn-success btn-round m-top-40">Получить доступ</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>