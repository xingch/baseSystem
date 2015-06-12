<?php
namespace backend\controllers;

/**
 * index controller
 * @desc 后台首页控制
 */
class IndexController extends BackendController
{
    /**
     * 首页框架 
     */
    public function actionIndex()
    {
        return $this->renderPartial('index');
    }
}