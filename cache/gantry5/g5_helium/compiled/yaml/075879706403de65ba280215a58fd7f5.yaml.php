<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/aljoykz/horest.kz/templates/g5_helium/custom/config/default/page/head.yaml',
    'modified' => 1494021946,
    'data' => [
        'meta' => [
            0 => [
                'og:title' => 'Поможем вам с выбором заведений, услуг в городе Алматы'
            ],
            1 => [
                'og:site_name' => 'HoRest'
            ],
            2 => [
                'twitter:site' => '@likornet'
            ]
        ],
        'head_bottom' => '',
        'atoms' => [
            0 => [
                'id' => 'analytics-3601',
                'type' => 'analytics',
                'title' => 'Google Analytics',
                'attributes' => [
                    'enabled' => '1',
                    'ua' => [
                        'code' => 'UA-97423199-2',
                        'anonym' => '0',
                        'ssl' => '0',
                        'debug' => '0'
                    ]
                ]
            ],
            1 => [
                'id' => 'assets-7158',
                'type' => 'assets',
                'title' => 'Custom CSS / JS',
                'attributes' => [
                    'enabled' => '1',
                    'css' => [
                        0 => [
                            'location' => '',
                            'inline' => '.g-menu-item-title {
font-size: 25px;
}

#g-navigation .g-grid{
padding:0px;
}




.g-toplevel{
margin-top:100px;
}',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'New item'
                        ]
                    ],
                    'javascript' => [
                        0 => [
                            'location' => '',
                            'inline' => '<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Blog",
"url": "http://www.horest.kz/"
}
</script>
<script type="application/ld+json">
{
"@context": "http://schema.org",
"@type": "Organization",
"name": "HoRest",
"url": "http://www.horest.kz/",
"sameAs": [
"https://www.facebook.com/horest.kz/",
"https://plus.google.com/u/0/103515505483922943559",
"http://twitter.com/likornet"
]
}
</script>',
                            'in_footer' => '1',
                            'extra' => [
                                
                            ],
                            'priority' => '0',
                            'name' => 'soc'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
