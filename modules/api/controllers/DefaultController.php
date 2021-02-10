<?php

namespace app\modules\api\controllers;
header('Access-Control-Allow-Origin: *');

use yii\rest\ActiveController;
//use yii\web\Controller;

class DefaultController extends ActiveController
{
    public $modelClass = 'app\models\Ciudades';

      /*  public function actionIndex()
    {
        return $this->render('index');
    } */
}
