<?php

namespace app\modules\admin\controllers;

class MaiController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
