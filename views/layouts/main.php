<?php
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use kartik\nav\NavX;

/* @var $this \yii\web\View */
/* @var $content string */

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>

<?php $this->beginBody() ?>
    <div class="wrap">
        <?php
            NavBar::begin([
                //'brandLabel' => 'PowerFlow',
                'brandLabel' => Html::img('images/logo.jpg'),
                'brandUrl' => Yii::$app->homeUrl,
                'options' => [
                    'class' => 'navbar navbar-fixed-top',
                ],
            ]);

        $itemsLeft = [['label' => '  Home', 'url' => ['/site/index']]];
        $itemsLeft[] = [
            'label' => 'Services',
            'items' => [
                ['label' => 'Pumps for Industries Purpose',
                    'items' => [
                        ['label' => 'Hydro Pneumatic Systems', 'url' => 'site/hydro-pneumatic-systems'],
                        '<li class="divider"></li>',
                        ['label' => 'Hot and Cold Water Circulator Pumps', 'url' => 'site/hot-cold-water-ciculator-pumps'],
                    ],
                ],
                '<li class="divider"></li>',
                ['label' => 'Pumps for Domestic Purpose',
                    'items' => [
                        ['label' => 'Bore well pumps, Open well pumps', 'url' => 'site/bore-well-open-well-pumps'],
                        '<li class="divider"></li>',
                        ['label' => 'Pressure Boosting Systems', 'url' => 'site/pressure-boosting-systems'],
                        '<li class="divider"></li>',
                        ['label' => 'Home Boosters', 'url' => 'site/home-boosters'],
                        '<li class="divider"></li>',
                        ['label' => 'Hot and Cold Water Circulator Pumps', 'url' => 'site/hot-cold-water-ciculator-pumps'],
                    ]
                ],
                '<li class="divider"></li>',
                ['label' => 'Pumps for Residential / Commercial',
                    'items' => [
                        ['label' => 'Hydro Pneumatic Systems', 'url' => 'site/hydro-pneumatic-systems'],
                        '<li class="divider"></li>',
                        ['label' => 'Hot and Cold Water Circulator Pumps', 'url' => 'site/hot-cold-water-ciculator-pumps'],
                    ]
                ],
            ]
        ];
        $itemsLeft[] = ['label' => 'Gallery', 'url' => ['site/gallery']];
        $itemsLeft[] = ['label' => 'About', 'url' => ['site/about']];
        $itemsLeft[] = ['label' => 'Contact', 'url' => ['site/contact']];

        echo NavX::widget(['options' => ['class' => 'navbar-nav','id' => 'pfnav'], 'items' => $itemsLeft]);
        NavBar::end();
        ?>

        <div class="container">
            <?= $content ?>
        </div>
    </div>

    <footer class="footer">
        <div class="container">
            <p class="pull-left">&copy; PowerFlow <?= date('Y') ?></p>
        </div>
    </footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
