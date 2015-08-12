<?php

namespace wartron\yii2searchall\models;

use Yii;
use yii\base\Model;

/**
 * SearchForm is the model behind the searchall form.
 */
class SearchForm extends Model
{
    public $q;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['q'], 'required'],
        ];
    }

}
