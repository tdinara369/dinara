<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '590d120e850ff3.68664638',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        
        <div id="g-owlcarousel-owlcarousel-7308" class="g-owlcarousel owl-carousel ">

                            <div class="g-owlcarousel-item owl-item">
                    <div class="g-owlcarousel-item-wrapper">
                        <div class="g-owlcarousel-item-img">
                            <img src="/images/burger.png?590c78d4" alt="" />
                        </div>
                        <div class="g-owlcarousel-item-content-container">
                            <div class="g-owlcarousel-item-content-wrapper">
                                <div class="g-owlcarousel-item-content">
                                                                                                                <h2 class="g-owlcarousel-item-desc">hello</h2>                                                                            <div class="g-owlcarousel-item-link">
                                            <a target="_self" class="g-owlcarousel-item-button button button-outline" href="http://www.horest.kz/new-places/#new-places">
                                                
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
            '2c1621846f9a5b8cb76a14e8ba2794abf3c619947a53626c83b4e1d67d284c1485cc3bc5' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-owlcarousel-owlcarousel-7308\').owlCarousel({
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
