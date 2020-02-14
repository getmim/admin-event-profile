<?php

return [
    '__name' => 'admin-event-profile',
    '__version' => '0.0.1',
    '__git' => 'git@github.com:getmim/admin-event-profile.git',
    '__license' => 'MIT',
    '__author' => [
        'name' => 'Iqbal Fauzi',
        'email' => 'iqbalfawz@gmail.com',
        'website' => 'http://iqbalfn.com/'
    ],
    '__files' => [
        'modules/admin-event-profile' => ['install','update','remove']
    ],
    '__dependencies' => [
        'required' => [
            [
                'admin' => NULL
            ],
            [
                'event' => NULL
            ],
            [
                'event-profile' => NULL
            ],
            [
                'profile' => NULL
            ]
        ],
        'optional' => []
    ],
    'autoload' => [
        'classes' => [],
        'files' => []
    ],
    'libForm' => [
        'forms' => [
            'admin.event.edit' => [
                'performers' => [
                    'label' => 'Performers',
                    'type' => 'object-list',
                    'object' => 'profile',
                    'itemIcon' => 'fas fa-user-md',
                    'button' => 'Add Profile',
                    'rules' => [
                        'json' => true 
                    ]
                ]
            ]
        ]
    ]
];