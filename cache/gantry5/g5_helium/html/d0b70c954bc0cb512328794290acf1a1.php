<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '590c50cc6c84f0.98245289',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        
        <div id="g-owlcarousel-owlcarousel-8938" class="g-owlcarousel owl-carousel ">

                            <div class="g-owlcarousel-item owl-item">
                    <div class="g-owlcarousel-item-wrapper">
                        <div class="g-owlcarousel-item-img">
                            <img src="/templates/g5_helium/custom/images/дом.png?590b4af6" alt="Хочешь найти для себя новый уютный уголок в городе?" />
                        </div>
                        <div class="g-owlcarousel-item-content-container">
                            <div class="g-owlcarousel-item-content-wrapper">
                                <div class="g-owlcarousel-item-content">
                                                                            <h1 class="g-owlcarousel-item-title">Хочешь найти для себя новый уютный уголок в городе?</h1>                                                                            <h2 class="g-owlcarousel-item-desc">5 новых модных заведений Алматы </h2>                                                                            <div class="g-owlcarousel-item-link">
                                            <a target="_self" class="g-owlcarousel-item-button button submit" href="http://horest.kz/reviews/restaurants">
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
            '9f52ff744d4269cf033349e0a00ec4eda56a4cb69409c3f5f396e70664d734fc414a4711' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-owlcarousel-owlcarousel-8938\').owlCarousel({
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
