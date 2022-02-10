<?php

namespace frontend\controllers;

class SiteController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}
