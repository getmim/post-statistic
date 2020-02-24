<?php

return [
    '__name' => 'post-statistic',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/post-statistic.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/post-statistic' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'lib-model' => NULL
            ],
            [
                'lib-formatter' => NULL
            ],
            [
                'post' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [
            'PostStatistic\\Model' => [
                'type' => 'file',
                'base' => 'modules/post-statistic/model'
            ]
        ],
        'files' => []
    ],
    'libFormatter' => [
        'formats' => [
            'post-statistic' => [
                'id' => [
                    'type' => 'number'
                ],
                'post' => [
                    'type' => 'object',
                    'model' => [
                        'name' => 'Post\\Model\\Post',
                        'field' => 'id',
                        'type' => 'number'
                    ],
                    'format' => 'post'
                ],
                'views' => [
                    'type' => 'number'
                ],
                'updated' => [
                    'type' => 'date'
                ],
                'created' => [
                    'type' => 'date'
                ]
            ]
        ]
    ]
];