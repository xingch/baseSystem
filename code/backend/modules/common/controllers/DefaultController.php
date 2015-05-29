<?php
/**
 * 后台首页 
 */
namespace backend\modules\common\controllers;

use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
