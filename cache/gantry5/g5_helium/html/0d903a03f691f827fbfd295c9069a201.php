<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '590c4bb105d091.15119589',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        
        <div id="g-owlcarousel-owlcarousel-1308" class="g-owlcarousel owl-carousel ">

                            <div class="g-owlcarousel-item owl-item">
                    <div class="g-owlcarousel-item-wrapper">
                        <div class="g-owlcarousel-item-img">
                            <img src="/templates/g5_helium/custom/images/дом.png?590b4af6" alt="Хочешь найти для себя новый уютный уголок в городе?" />
                        </div>
                        <div class="g-owlcarousel-item-content-container">
                            <div class="g-owlcarousel-item-content-wrapper">
                                <div class="g-owlcarousel-item-content">
                                                                            <h1 class="g-owlcarousel-item-title">Хочешь найти для себя новый уютный уголок в городе?</h1>                                                                            <h2 class="g-owlcarousel-item-desc">5 новых модных заведений Алматы </h2>                                                                            <div class="g-owlcarousel-item-link">
                                            <a target="_self" class="g-owlcarousel-item-button button submit" href="http://horest.kz/krasota/restorany">
                                                Подробнее
                                            </a>
                                        </div>
                                                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>

            
    </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'footer' => [
            'ed18e1e36fc59e555e7776c4e01b596e997e115da43901f9680b54b671fde79582544f05' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/templates/g5_helium/js/owlcarousel.js',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            'c0946323b02207d0ae924ce28908923c8c4de3c754b2af292ade6a01ad16b9236f3d4b9c' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-owlcarousel-owlcarousel-1308\').owlCarousel({
                items: 1,
                rtl: false,
                loop: true,
                                nav: false,
                                                dots: false,
                                                autoplay: false,
                            })
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
