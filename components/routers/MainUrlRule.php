<?php

namespace app\components\routers;

use sergeymakinen\facades\Db;
use sergeymakinen\facades\User;
use yii\web\UrlRuleInterface;
use yii\base\Object;

class MainUrlRule extends Object implements UrlRuleInterface
{
    public function createUrl($manager, $route, $params)
    {
        if ($route === 'promo/index') {
            if (isset($params['slug'])) {

                return $params['slug'];
            }
        }

        return false;
    }

    public function parseRequest($manager, $request)
    {

        return ['promo/index'];

//        $pathInfo = $request->getPathInfo();
//
//        if ($pathInfo != '') return false;
//        if (!User::getIsGuest()) return false;
//
//        if (!empty($pageId)) {
//            return ['promo/index'];
//        }
//
//        return false;
    }
}