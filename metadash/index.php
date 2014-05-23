<?php

// change the following paths if necessary
//WIN:
$yii=dirname(__FILE__).'/../../../../Program Files (x86)/PHP/Yii/framework/yii.php';
//LIN:
//$yii=dirname(__FILE__).'/../../../../home/ubuntu/yii/yii-1.1.14.f0fee9/framework/yii.php';
<<<<<<< HEAD
=======
//$yii='/home/ubuntu/yii/yii-1.1.14.f0fee9/framework/yii.php';
>>>>>>> 99e2246e8f6c8f907fc870d5f29a3caf6f725a75
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
defined('YII_DEBUG') or define('YII_DEBUG',true);
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();
