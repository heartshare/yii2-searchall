<?php

namespace wartron\yii2searchall;

use yii\base\Module as BaseModule;
use yii\base\InvalidParamException;


/**
 * Class Module
 */
class Module extends BaseModule
{
    const VERSION = '0.0.1-dev';

    /** @var array of objects to search, this is an example  */
    public $objects = [
        // 'user'  =>  [
        //     'class' =>  'common\models\User',
        //     'link'  =>  '/user/admin/update',
        //     'linkPk'    =>  'id',
        //     'fields'    =>  [
        //         'username',
        //         'email',
        //     ],
        // ],
        // 'profile'  =>  [
        //     'class' =>  'common\models\Profile',
        //     'link'  =>  '/user/admin/update',
        //     'linkPk'    =>  ['id'=>'user_id'],
        //     'fields'    =>  [
        //         'name',
        //         'public_email',
        //         'gravatar_email',
        //         'location',
        //         'website',
        //         'bio',
        //     ],
        // ],
    ];

    public function init()
    {
        parent::init();

        $this->objects = $this->normalizeObjects($this->objects);
    }


    public function normalizeObjects($objects)
    {
        $normalized = [];

        foreach($objects as $key => $opts)
        {
            $item = array_merge([
                'link'      =>  '/crud/$key/view',
                'linkPk'    =>  'id',
                ],$opts);

            if(!isset($item['class']))
                throw new InvalidParamException("Object '{$key}' must have a class definition.");
            if(!isset($item['fields']))
                throw new InvalidParamException("Object '{$key}' must have a fields array.");

            $normalized[$key] = $item;
        }

        return $normalized;
    }

    public function getObjects()
    {
        return $this->objects;
    }

    public function getObject($object)
    {
        return $this->objects[$object];
    }


}
