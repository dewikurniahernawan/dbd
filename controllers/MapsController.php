<?php

namespace app\controllers;

use yii\web\controller;
use app\models\maps;

class MapsController extends Controller{
    public function actionAktif(){
        return $this->render('aktif');
    }
    public function actionNonaktif(){
        return $this->render('nonaktif');
    }
}