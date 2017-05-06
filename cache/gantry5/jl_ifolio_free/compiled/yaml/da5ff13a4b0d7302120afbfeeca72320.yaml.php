<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/aljoykz/horest.kz/templates/jl_ifolio_free/blueprints/styles/accent.yaml',
    'modified' => 1493398175,
    'data' => [
        'name' => 'Accent Colors',
        'description' => 'Accent colors for the iFolio theme',
        'type' => 'core',
        'form' => [
            'fields' => [
                'color-1' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 1',
                    'default' => '#929292'
                ],
                'color-2' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Accent Color 2',
                    'default' => '#3699f5'
                ]
            ]
        ]
    ]
];
