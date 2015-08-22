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
        $module = \Yii::$app->getModule('searchall');

        $search = Yii::$app->request->get($module->searchParam);
        $key    = Yii::$app->request->get($module->objectParam);

        $thing = $module->getObject($key);

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

        $items = $query->all();

        return $this->renderPartial('results',[
            'items'     =>  $items,
            'key'       =>  $key,
            'object'    =>  $thing,
        ]);

        // Yii::$app->response->format = Response::FORMAT_JSON;
        // return $items;
    }


}
