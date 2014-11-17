<?php

// comment out the following two lines when deployed to production
/*echo '熊妞妞呀熊妞妞呀！一头小狗熊真可爱';
exit;*/
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

define('STATIC_DOMAIN', 'static.dingdan.com');
define('WEB_DOMAIN', 'dingdan.com');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
$config = require(__DIR__ . '/../config/web.php');
(new yii\web\Application($config))->run();
