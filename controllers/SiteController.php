<?php
/**
 * Created by PhpStorm.
 * User: biv
 * Date: 01.04.2019
 * Time: 18:21
 */

namespace app\controllers;

use \yii\web\Controller;


class SiteController extends Controller
{
    public function actionIndex() {
        return 'Our CRM';
    }
}