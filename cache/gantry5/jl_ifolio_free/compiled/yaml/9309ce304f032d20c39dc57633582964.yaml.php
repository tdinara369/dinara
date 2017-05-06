<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/aljoykz/horest.kz/templates/jl_ifolio_free/blueprints/styles/fixedside.yaml',
    'modified' => 1493398175,
    'data' => [
        'name' => 'FixedSide Styles',
        'description' => 'FixedSide styles for the iFolio theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#868686'
                ],
                'width' => [
                    'type' => 'input.text',
                    'label' => 'FixedSide Width',
                    'default' => '15rem'
                ],
                'position' => [
                    'type' => 'select.selectize',
                    'label' => 'Position',
                    'description' => 'Select the FixedSide position.',
                    'default' => 'left',
                    'options' => [
                        'left' => 'Left',
                        'right' => 'Right'
                    ]
                ]
            ]
        ]
    ]
];
