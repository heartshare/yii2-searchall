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
            'link'  =>  '/user/admin/update',
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
            'link'  =>  '/user/admin/update',
        ],
        'gizmo'  =>  [
            'class' =>  'common\models\Gizmo',
            'fields'    =>  [
                'name',
            ],
            'link'  =>  '/crud/gizmo/view',
        ],
    ];


}
