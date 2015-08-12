<?php

namespace wartron\yii2searchall;

use yii\base\Module as BaseModule;


/**
 * Class Module
 */
class Module extends BaseModule
{
    const VERSION = '0.0.1-dev';

    /** @var array  */
    public $objects = [
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
    ];


}
