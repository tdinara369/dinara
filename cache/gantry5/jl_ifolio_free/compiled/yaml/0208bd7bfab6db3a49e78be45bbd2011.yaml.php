<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/aljoykz/horest.kz/templates/jl_ifolio_free/blueprints/styles/font.yaml',
    'modified' => 1493398175,
    'data' => [
        'name' => 'Font Families',
        'description' => 'Font families for the iFolio theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'family-default' => [
                    'type' => 'input.fonts',
                    'label' => 'Body Font',
                    'default' => 'family=Roboto:300'
                ],
                'family-title' => [
                    'type' => 'input.fonts',
                    'label' => 'Title Font',
                    'default' => 'family=Work+Sans:500'
                ]
            ]
        ]
    ]
];
