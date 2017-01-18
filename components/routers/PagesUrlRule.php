<?php

namespace app\components\routers;

use sergeymakinen\facades\Db;
use yii\web\UrlRuleInterface;
use yii\base\Object;

class PagesUrlRule extends Object implements UrlRuleInterface
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
//        $slug = (substr($pathInfo, -1) != '/') ? $pathInfo : substr($pathInfo, 0, -1);
//
//        $pageId = Db::createCommand('SELECT id FROM questions WHERE slug = :slug')
//            ->bindParam(':slug', $slug)
//            ->queryScalar();
//
//        if (!empty($pageId)) {
//            return ['promo/index', ['id' => $pageId]];
//        }
//
//        return false;
    }
}