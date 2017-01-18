<?php

namespace app\components;

use yii\grid\ActionColumn;

class CustomActionColumn extends ActionColumn
{
    public $template = '{view} {update}';
}