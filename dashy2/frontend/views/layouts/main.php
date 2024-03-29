<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\widgets\Alert;

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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                'brandLabel' => 'MetaDash - a project of Chapin Hall at the University of Chicago',   //Chapin Custom - originally 'My Company'
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar-inverse navbar-fixed-top',
                ],
            ]);
            $menuItems = [
                ['label' => 'Home', 'url' => ['/site/index']],
                ['label' => 'About', 'url' => ['/site/about']],
                ['label' => 'Contact', 'url' => ['/site/contact']],
            ];
            if (Yii::$app->user->isGuest) {
                $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
            } else {
                $menuItems[] = [
                    'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                    'url' => ['/site/logout'],
                    'linkOptions' => ['data-method' => 'post']
                ];
            }
			echo Nav::widget([
                'options' => ['class' => 'navbar-nav navbar-right'],
                'items' => $menuItems,
            ]);
            
			/* GMS CUSTOM */
            echo Nav::widget(array( 
			 'options' => ['class' => 'navbar-nav navbar-right'],
			 'items' => array( 
			   array( 'label' => 'Metadata Lifecycle', 
			     'items' => array( 
			       array( 'label' => 'Data Source', 'url' => 'index.php?r=datasource/index#' ), 
			       array( 'label' => 'Data Set', 'url' => 'index.php?r=dataset/index#' ), 
			       array( 'label' => 'Data Request (outbound)', 'url' => 'index.php?r=outbounddatarequest/index#' ), 
			       array( 'label' => 'Data Receipt', 'url' => 'index.php?r=datareceipt/index#' ),
			       array( 'label' => 'Data Dictionary', 'url' => 'index.php?r=datadict/index#' ),
			     ),
			   ), 
			  ), 
			));      /* END CUSTOM */
			
            NavBar::end();
        ?>

        <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
        <p class="pull-left">&copy; Chapin Hall <?= date('Y') ?></p>   <!-- CHAPIN HALL CUSTOM -->
        <p class="pull-right"><?= Yii::powered() ?></p>
        </div>
    </footer>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
