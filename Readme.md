# Yii2-Searchall



## Installation

Add to the modules in config/main.php

You can override the default layout as well.

    'modules'    => [
        'searchall' => [
            'class' =>  'wartron\yii2searchall\Module',
            'objects'   =>  [
                'user'  =>  [
                    'class' =>  'common\models\User',
                    'fields'    =>  [
                        'username',
                        'email',
                    ],
                ],
                'profile'  =>  [
                    'class' =>  'common\models\Profile',
                    'fields'    =>  [
                        'name',
                        'public_email',
                        'gravatar_email',
                        'location',
                        'website',
                        'bio',
                    ],
                ],
                'gizmo'  =>  [
                    'class' =>  'common\models\Gizmo',
                    'fields'    =>  [
                        'name',
                    ],
                ],
                'team'  =>  [
                    'class' =>  'common\models\Team',
                    'fields'    =>  [
                        'name',
                    ],
                ],
            ]
        ]
    ],


