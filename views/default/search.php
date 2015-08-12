<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

use yii\base\DynamicModel;
use yii\widgets\ActiveForm;

/**
* @var yii\web\View $this
* @var yii\data\ActiveDataProvider $dataProvider
* @var backend\models\search\Team $searchModel
*/

$this->title = 'Search All';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="searchall-index">

    <?php
        echo $this->render('@vendor/wartron/yii2-searchall/views/default/_form',[
            'searchForm'    =>  $searchForm,
            'objects'       =>  $objects,
        ]);


        foreach($objects as $key => $opts){
            echo Html::panel([
                'heading'   =>  'Search '.strtoupper($key),
                'body'      =>  $this->render('_search_widget',[
                    'searchForm'    =>  $searchForm,
                    'key'           =>  $key,
                    'opts'          =>  $opts,
                ]),
            ]);
        }

    ?>

</div>






