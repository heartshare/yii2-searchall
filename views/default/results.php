<?php



use kartik\helpers\Html;
use yii\data\ArrayDataProvider;
use yii\grid\GridView;



if(count($items) == 0 ) {
    echo "<span>No results for <strong>{$key}</strong>.</span>";
}else{

    $dataProvider = new ArrayDataProvider([
            'allModels' =>  $items,
    ]);
    $pk = 'id';
    if($key=='profile')
        $pk = 'user_id';

    $cols = array_merge([
        [
            'attribute' =>  $pk,
            'format'    =>  'raw',
            'value'     =>  function($m) use ($pk,$object) {
                return Html::a($m->$pk,[$object['link'],'id'=>$m->$pk]);
            }
        ],
    ],$object['fields']);

    $this->beginBlock('results');
?>
            <div class="table-responsive">
                <?php
                    echo GridView::widget([
                        'layout'        => '{summary}{pager}{items}{pager}',
                        'dataProvider'  => $dataProvider,
                        'columns'       => $cols
                    ]);
                ?>
            </div>
        <?php
    // echo "<pre>";
    // foreach($items as $item){
    //     print_r($item->getAttributes());
    // }
    // echo "</pre>";
    $this->endBlock();

    echo Html::panel([
        'heading'   =>  'Results '.strtoupper($key),
        'body'      =>  $this->blocks['results'],
    ]);
}
