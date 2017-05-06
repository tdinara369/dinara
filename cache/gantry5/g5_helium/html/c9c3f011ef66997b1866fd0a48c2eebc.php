<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '590b2b66a8a780.45848111',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        
        <div id="g-owlcarousel-owlcarousel-8938" class="g-owlcarousel owl-carousel ">

                            <div class="g-owlcarousel-item owl-item">
                    <div class="g-owlcarousel-item-wrapper">
                        <div class="g-owlcarousel-item-img">
                            <img src="/images/daily_coffee-8588-14_ru.jpg?5903b8b9" alt="Не знаешь где поесть вкусное мороженое?" />
                        </div>
                        <div class="g-owlcarousel-item-content-container">
                            <div class="g-owlcarousel-item-content-wrapper">
                                <div class="g-owlcarousel-item-content">
                                                                            <h1 class="g-owlcarousel-item-title">Не знаешь где поесть вкусное мороженое?</h1>                                                                                                                <div class="g-owlcarousel-item-link">
                                            <a target="_self" class="g-owlcarousel-item-button button submit" href="http://horest.kz/krasota/restorany">
                                                Read more
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
            'd76f48bd6292d276de6b050ce4437ab08b05b20576bc34092d83e3c09a49476f95aa386e' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/templates/g5_helium/js/owlcarousel.js?590222a7',
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
