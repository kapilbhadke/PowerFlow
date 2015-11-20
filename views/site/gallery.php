<?php
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
    <div class="site-about page text-center">
        <h1>Heading</h1><br><br>
        <?php
        $items = [
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
                'options' => array('title' => 'Camposanto monumentale (inside)')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
                'options' => array('title' => 'Camposanto monumentale (inside)')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478294690_51ae7eb6c9_s.jpg',
                'options' => array('title' => 'Camposanto monumentale (inside)')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3712/9478186779_81c2e5f7ef_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3789/9476654149_b4545d2f25_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7429/9478868728_e9109aff37_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3825/9476606873_42ed88704d_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3749/9480072539_e3a1d70d39_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_b.jpg',
                'src' => 'http://farm8.static.flickr.com/7352/9477439317_901d75114a_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
            [
                'url' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_b.jpg',
                'src' => 'http://farm4.static.flickr.com/3802/9478895708_ccb710cfd1_s.jpg',
                'options' => array('title' => 'Sail us to the Moon')
            ],
        ];?>
        <?= dosamigos\gallery\Gallery::widget(['items' => $items]);?>
    </div>

<?php
/*
$items = [
    [
        'title' => 'Sintel',
        'href' => 'http://media.w3.org/2010/05/sintel/trailer.mp4',
        'type' => 'video/mp4',
        'poster' => 'http://media.w3.org/2010/05/sintel/poster.png'
    ],
    [
        'title' => 'Big Buck Bunny',
        'href' => 'http://upload.wikimedia.org/wikipedia/commons/7/75/Big_Buck_Bunny_Trailer_400p.ogg',
        'type' => 'video/ogg',
        'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/7/70/Big.Buck.Bunny.-.Opening.Screen.png/' .
            '800px-Big.Buck.Bunny.-.Opening.Screen.png'
    ],
    [
        'title' => 'Elephants Dream',
        'href' => 'http://upload.wikimedia.org/wikipedia/commons/transcoded/8/83/Elephants_Dream_%28high_quality%29.ogv/' .
            'Elephants_Dream_%28high_quality%29.ogv.360p.webm',
        'type' => 'video/webm',
        'poster' => 'http://upload.wikimedia.org/wikipedia/commons/thumb/9/90/Elephants_Dream_s1_proog.jpg/' .
            '800px-Elephants_Dream_s1_proog.jpg'
    ],
    [
        'title' => 'LES TWINS - An Industry Ahead',
        'href' => 'http://www.youtube.com/watch?v=zi4CIXpx7Bg',
        'type' => 'text/html',
        'youtube' => 'zi4CIXpx7Bg',
        'poster' => 'http://img.youtube.com/vi/zi4CIXpx7Bg/0.jpg'
    ],
    [
        'title' => 'KN1GHT - Last Moon',
        'href' => 'http://vimeo.com/73686146',
        'type' => 'text/html',
        'vimeo' => '73686146',
        'poster' => 'http://b.vimeocdn.com/ts/448/835/448835699_960.jpg'
    ]
];

echo dosamigos\gallery\Carousel::widget([
    'items' => $items, 'json' => true,
    'clientEvents' => [
        'onslide' => 'function(index, slide) {
            console.log(slide);
        }'
    ]]);
*/
?>