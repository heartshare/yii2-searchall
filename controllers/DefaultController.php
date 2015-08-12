<?php
namespace wartron\yii2searchall\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSearchapi()
    {
        $search = $_GET['search'];
        $object  = $_GET['object'];

        $thing = \Yii::$app->getModule('docker')->objects[$object];

        $class = $thing['class'];
        $query = $class::find();

        $filter = [
            'or',
            // ['like', 'username', $search],
            // ['like', 'email', $search],
        ];

        foreach($thing['fields'] as $field) {
            $filter[] = ['like', $field, $search];
        }

        $query->andFilterWhere($filter);

        $ret = $query->all();

        Yii::$app->response->format = Response::FORMAT_JSON;
        return $ret;
    }


}