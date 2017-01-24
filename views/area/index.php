<style>
    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
        z-index: 2;
        color: #fff;
        background-color: #5cb85c;
        border-color: #5cb85c;
    }

    section {
        padding: 0px 0;
    }
    i.grey {
        color: darkgray;
    }
    p, pre {
        font-size: 14px !important;
    }
</style>
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
                </div>
            </div>
            <div class="col-md-3">
                <p class="lead">Категории</p>
                <div class="list-group">
                    <?php
                    foreach (\app\models\Type::find()->all() as $type) {
                        echo '<a href="/area/'. $type->id .'" class="list-group-item '. (($currentType->id == $type->id) ? 'active' : '') .'">'. $type->name .'</a>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</section>

