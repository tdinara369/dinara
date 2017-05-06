<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/aljoykz/horest.kz/templates/g5_helium/custom/config/13/layout.yaml',
    'modified' => 1494029280,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'home_-_particles',
            'timestamp' => 1492753493
        ],
        'layout' => [
            '/navigation/' => [
                0 => [
                    0 => 'logo-9705 20',
                    1 => 'social-5078 15',
                    2 => 'menu-7323 64.9'
                ]
            ],
            '/header/' => [
                0 => [
                    0 => 'owlcarousel-8938'
                ]
            ],
            '/intro/' => [
                0 => [
                    0 => 'custom-7500'
                ]
            ],
            '/features/' => [
                0 => [
                    0 => 'contentarray-4893'
                ]
            ],
            '/utility/' => [
                
            ],
            '/above/' => [
                
            ],
            '/testimonials/' => [
                
            ],
            '/expanded/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'mainbar 75' => [
                            
                        ]
                    ],
                    1 => [
                        'sidebar 25' => [
                            
                        ]
                    ]
                ]
            ],
            'footer' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'navigation' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '',
                    'class' => 'g-flushed'
                ]
            ],
            'intro' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'features' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'testimonials' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main'
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside'
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'logo-9705' => [
                'title' => 'Logo / Image',
                'attributes' => [
                    'image' => 'gantry-media://horest.png'
                ]
            ],
            'social-5078' => [
                'attributes' => [
                    'target' => '_blank',
                    'display' => 'both',
                    'items' => [
                        0 => [
                            'icon' => 'fa fa-twitter fa-fw',
                            'text' => '',
                            'link' => 'https://twitter.com/likornet',
                            'name' => 'Twitter'
                        ],
                        1 => [
                            'icon' => 'fa fa-facebook fa-fw',
                            'text' => '',
                            'link' => 'https://www.facebook.com/dinara.tusupova.9',
                            'name' => 'Facebook'
                        ],
                        2 => [
                            'icon' => 'fa fa-google-plus fa-fw',
                            'text' => '',
                            'link' => 'https://plus.google.com/u/0/',
                            'name' => 'Google+'
                        ]
                    ]
                ]
            ],
            'menu-7323' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block'
                    ],
                    'particle' => 'menu-6409'
                ]
            ],
            'owlcarousel-8938' => [
                'title' => 'Owl Carousel',
                'attributes' => [
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://дом.png',
                            'title' => 'Хочешь найти для себя новый уютный уголок в городе?',
                            'desc' => '5 новых модных заведений Алматы ',
                            'link' => 'http://www.horest.kz/new-places/#new-places',
                            'linktext' => 'Подробнее',
                            'buttonclass' => 'submit',
                            'name' => 'new'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'title-center'
                ]
            ],
            'custom-7500' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<div class="fp-features">
    <div class="g-grid" >
        <div class="g-block size-32">
            <div class="card">
                <div class="card-block">
                 <img src="images/cosmetics.png" alt="Best Cosmetics" />
                </div>
            </div>
        </div>
<div class="g-block size-68" >
            <div class="card">
                <div class="card-block" >
                 <h5 class="card-title" style="font-size:20px; padding-top:45px;">Качественная косметика</h5>
                    <p class="card-text" style="font-size:15px;"> В наши дни тяжело найти хорошую косметику, которая не будет портить кожу. Обойдя огромное количество интернет-магазинов, я остановила свой выбор на elle-secrets.kz у кого можно найти действительно качественную косметику. </p>
 
                </div>
            </div>
        </div>
</div>
<hr>
<div class="g-grid"  >
<div class="g-block size-68" >
            <div class="card">
                <div class="card-block">
                 <h4 class="card-title" style="font-size:20px; padding-top:45px;"">Лучший Визажист города</h4>
                    <p class="card-text" style="font-size:15px;">На любом мероприятии любая девушка мечтает быть похожей на принцессу. В этом вам поможет волшебница  Сауле @makeupbysss. Сауле проходила квалификацию у самой Гоар Аветисян.  Отличное качество за приемлемые цены!
 </p>
 
                </div>
            </div>
        </div>

        <div class="g-block size-32">
            <div class="card">
                <div class="card-block">
                   <img src="images/makeup.png" alt="MakeUp"/> 
                </div>
            </div>
        </div>
</div>
<hr>
<div class="g-grid" >
        <div class="g-block size-32">
            <div class="card">
                <div class="card-block">
                                       <img src="images/gantry/magic-min.jpg" alt="Magic-Box" /> 
                </div>
            </div>
        </div>
<div class="g-block size-68" >
            <div class="card">
                <div class="card-block">
                 <h6 class="card-title" style="font-size:20px; padding-top:45px;"">Необычные подарки</h6>
                    <p class="card-text" style="font-size:15px;"> Коробки MagicBox готовятся индивидуально по вашему предпочтению! Можете выбрать любой понравившийся цвет для изготовления коробки.Фото приятных моментов с получателем коробки сделают подарок еще запоминающее и приятнее!</p>
 
                </div>
            </div>
        </div>
</div>
<hr>
</div>
'
                ]
            ],
            'contentarray-4893' => [
                'title' => 'Joomla Articles',
                'attributes' => [
                    'article' => [
                        'filter' => [
                            'categories' => '8,9',
                            'articles' => '',
                            'featured' => 'include'
                        ],
                        'limit' => [
                            'total' => '',
                            'columns' => '3',
                            'start' => '0'
                        ],
                        'sort' => [
                            'orderby' => 'publish_up',
                            'ordering' => 'ASC'
                        ],
                        'display' => [
                            'read_more' => [
                                'enabled' => 'show',
                                'label' => 'Подробнее..',
                                'css' => 'button-outline submit'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
