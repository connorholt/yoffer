<?php

namespace app\controllers;

use app\models\Question;
use app\models\Type;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * PageController implements the CRUD actions for Page model.
 */
class PromoController extends Controller
{

    public function actionIndex()
    {
        return $this->renderPartial('index');
    }

}
