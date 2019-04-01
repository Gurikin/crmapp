<?php
/**
 * Created by PhpStorm.
 * User: biv
 * Date: 01.04.2019
 * Time: 17:54
 */

// Including the Yii framework itself
require(__DIR__ . "/../vendor/yiisoft/yii2/Yii.php");
// Getting the configuration
$config = require(__DIR__ . "/../config/web.php");
// Making and launching th application immediately
(new yii\web\Application($config))->run();
