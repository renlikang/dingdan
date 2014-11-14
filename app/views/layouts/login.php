<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Joychao <joy@joychao.cc>"> 
    <title><?= Html::encode('系统登录') ?></title>
    <link class="bootstrap library" rel="stylesheet" type="text/css" href="/dingdan/app/static/css/bootstrap.min.css">
    <script class="bootstrap library" src="/dingdan/app/static/js/jquery-1.7.2.min.js" type="text/javascript"></script>
    <script class="bootstrap library" src="/dingdan/app/static/bootstrap.min.js" type="text/javascript"></script>    
    <?php $this->head() ?>
</head>
<body>

<?= $content ?>
</body>
</html>
<?php $this->endPage() ?>
