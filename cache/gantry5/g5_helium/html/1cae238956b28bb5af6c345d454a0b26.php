<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '59022aa89f6001.28126180',
    'content' => '<div class="g-content g-particle">
                            
    <div class="">
        
        <div class="g-contenttabs">
            <div id="g-contenttabs-contenttabs-9570" class="g-contenttabs-container">
                <ul class="g-contenttabs-tab-wrapper-container">

                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-1">
                                    <span class="g-contenttabs-tab-title">1</span>
                                </a>
                            </span>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-2">
                                    <span class="g-contenttabs-tab-title">2</span>
                                </a>
                            </span>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <span class="g-contenttabs-tab-wrapper-head">
                                <a class="g-contenttabs-tab" href="#g-contenttabs-item-3">
                                    <span class="g-contenttabs-tab-title">3</span>
                                </a>
                            </span>
                        </li>
                    
                </ul>

                <div class="clearfix"></div>

                <ul class="g-contenttabs-content-wrapper-container">

                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-1" class="g-contenttabs-content">
                                    helloe
                                </div>
                            </div>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-2" class="g-contenttabs-content">
                                    how
                                </div>
                            </div>
                        </li>
                                            <li class="g-contenttabs-tab-wrapper">
                            <div class="g-contenttabs-tab-wrapper-body">
                                <div id="g-contenttabs-item-3" class="g-contenttabs-content">
                                    what
                                </div>
                            </div>
                        </li>
                    
                </ul>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

            
    </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'head' => [
            '7a1060ddd58085c42482b1dee06c1d2bba19540394d9e3a290436ad03f10ced1814715ac' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/templates/g5_helium/js/juitabs.js?590222a7',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ]
        ],
        'footer' => [
            'f8b23154dff30f16a445777f9834fe21163cd2c58ada07ad7624393b80c7a12bfc38c7c2' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(window).load(function() {
            jQuery(\'#g-contenttabs-contenttabs-9570\').tabs({
                show: {
                                        effect: \'slide\',
                    direction: \'down\',
                                        duration: 500
                }
            });
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
