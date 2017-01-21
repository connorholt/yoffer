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

        background: #179880;
        transition: all 0.4s;

    }

    .bs-five-area .bs-five.active {
        background: #179880;
        background: -webkit-linear-gradient(left, #179880 , #21A476);
        background: -o-linear-gradient(right, #179880, #21A476);
        background: -moz-linear-gradient(right, #179880, #21A476);
        background: linear-gradient(to right, #179880 , #21A476);
    }

    .bs-five-area .bs-five .btn-success{
        padding: 10px 50px;
        display: inline-block;
        border-radius: 30px;
        background-color: #179880;
        border-color: #21A476;
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
</style>
<section id="bs-pricing-five" class="bs-pricing-five p-top-100 bg-white">
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
                            <li>20 вопросв по теории</li>
                            <li>10 практических задач</li>
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
                            <li>Все вопросы по теории с ответами</b></li>
                            <li>Все практические задачи с решениями</li>
                            <li>Ссылки на дополнительные материалы</li>
                            <li> </li>
                            <li> </li>
                        </ul>
                        <a href="/pay/1" class="btn btn-success btn-round m-top-40">Скидка <b>200р</b></a>
                    </div>
                </div>
                <div class="col-md-3 no-padding">
                      <div class="bs-five">
                        <h6 class="text-uppercase">Стандарт</h6>
                        <h1 class="bs-caption">499<sup>руб.</sup></h1>
                        <p>Доступ на 3 месяца</p>

                        <ul style="height: 255px">
                            <li>Все вопросы по теории с ответами</b></li>
                            <li>Все практические задачи с решениями</li>
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
                            <li>Все вопросы по теории с ответами</b></li>
                            <li>Все практические задачи с решениями</li>
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

<section id="contact" style="padding: 30px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Оплата доступа</h2>
                <hr class="primary">
            </div>
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/shop-widget?account=410013732168585&quickpay=shop&payment-type-choice=on&mobile-payment-type-choice=on&writer=seller&targets=%D0%9E%D0%BF%D0%BB%D0%B0%D1%82%D0%B0+%D0%B4%D0%BE%D1%81%D1%82%D1%83%D0%BF%D0%B0+%D0%BD%D0%B0+%D1%81%D0%B0%D0%B9%D1%82&targets-hint=&default-sum=99&button-text=01&mail=on&phone=on&successURL=yoffer.ru%2Fpay" width="450" height="198"></iframe>
            </div>
        </div>
    </div>
</section>
