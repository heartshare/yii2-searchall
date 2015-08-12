<?php
namespace wartron\yii2searchall\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use wartron\yii2searchall\models\SearchForm;

class DefaultController extends Controller
{
    public function actionIndex()
    {
        $searchForm = new SearchForm;

        if ($searchForm->load(Yii::$app->request->post())) {
            return $this->render('search',[
                'searchForm'    =>  $searchForm,
                'objects'       =>  \Yii::$app->getModule('searchall')->getObjects(),
            ]);
        } else {
            return $this->render('index',[
                'searchForm'    =>  $searchForm,
                'objects'       =>  \Yii::$app->getModule('searchall')->getObjects(),
            ]);
        }

    }

    public function actionSearchapi()
    {
        $search = $_GET['search'];
        $object  = $_GET['object'];

        $thing = \Yii::$app->getModule('searchall')->getObject($object);

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
