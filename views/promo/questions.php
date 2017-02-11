<style>
    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #5cb85c;
        border-color: #5cb85c;
    }

    section {
        padding: 40px 0;
    }
     i.grey {
         color: darkgray;
     }
    p, pre {
        font-size: 14px !important;
    }
</style>
<script>
    $('.carousel').carousel({
        interval: 3000
    })
</script>
<section id="bs-pricing-five" class="bs-pricing-five bg-white">
<div class="container">
    <div class="page-header">
        <h1>Вопросы по: <?=$currentType->name;?>
            <small></small>
        </h1>
    </div>
    <div class="row">
        <div id="faq" class="col-md-9">
            <div class="panel-group" id="accordion">
                <?php
                echo \yii\widgets\ListView::widget([
                    'dataProvider' => $dataProvider,
                    'itemView' => '_list',
                    'layout'=>"{items}\n{pager}",
                    'itemOptions' => [
                        'tag' => 'div',
                        'class' => 'panel panel-default'
                    ],
                ]);
                ?>

                <br />
                <a href="/prices" class="btn btn-success btn-xl sr-button pull-right">+ 50 вопросов</a>
            </div>
        </div>
        <div class="col-md-3">
            <p class="lead">Категории</p>
            <div class="list-group">
                <?php
                foreach (\app\models\Type::find()->all() as $type) {
                    echo '<a href="/questions/'. $type->id .'" class="list-group-item '. (($currentType->id == $type->id) ? 'active' : '') .'">'. $type->name .'</a>';
                }
                ?>
            </div>

<!--            <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/search?count=6&locale=RU&links_color=868686&border_color=868686&text=php&area=113&show_region=true&specialization=1&currency=RUR&only_with_salary=true&salary=200000&experience=between3And6&employment=full&employment=project"></script>-->
        </div>
    </div>
</div>

    </section>

<section id="contact"  class="bg-primary">
    <div class="container text-center">
        <div class="call-to-action">
            <h2>Получите доступ к полной версии</h2>
            <p>Вы можете выбрать один из тарифов и получит доступ ко все вопросам и ответам</p>
            <a href="/prices" class="btn btn-default btn-xl sr-button">Ознакомиться с тарифами</a>
        </div>
    </div>
</section>
