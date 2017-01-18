<?php

namespace app\controllers;

use yii\web\Controller;

class ErrorController extends Controller
{
    public $layout;

    public function actionError()
    {
        $this->layout = 'error';
        $message = \Yii::$app->errorHandler->exception->getMessage();
        $code = \Yii::$app->errorHandler->exception->statusCode;

        return $this->render('error', compact('message', 'code'));
    }
}
