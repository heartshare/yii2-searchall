<?php

use kartik\helpers\Html;
use yii\helpers\Url;
use yii\grid\GridView;

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
        echo $this->render('_form',[
            'searchForm'    =>  $searchForm,
            'objects'       =>  $objects,
        ]);
    ?>

    <div class="panel panel-default">
        <div class="panel-heading">Searching Classes</div>
        <div class="panel-body">
            <?php
                foreach($objects as $key => $opts){
                    echo $this->render('_search_object',[
                        'key'   =>  $key,
                        'opts'  =>  $opts,
                    ]);
                }
            ?>
        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">Debug</div>
        <div class="panel-body">
            <pre><?php print_r($objects); ?></pre>
        </div>
    </div>

</div>






