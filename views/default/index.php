<?php

use kartik\helpers\Html;
use yii\helpers\Url;


$this->title = 'Search All';
$this->params['breadcrumbs'][] = $this->title;

?>

<div class="searchall-index">
    <?php
        foreach($objects as $key => $opts){
            echo Html::panel([
                'heading'   =>  'Search '.strtoupper($key),
                'body'   =>  '',
            ]);
        }
    ?>
    <div class="panel panel-default">
        <div class="panel-heading">Debug</div>
        <div class="panel-body">
            <pre><?php print_r($objects); ?></pre>
        </div>
    </div>

</div>






