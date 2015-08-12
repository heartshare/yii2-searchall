<?php



use kartik\helpers\Html;


echo "<div id='searchall-{$key}'>";


if(count($items) == 0 ) {
    echo "<span>No results for <strong>{$key}</strong>.</span>";
}else{

    $this->beginBlock('results');
    echo "<pre>";
    foreach($items as $item){
        print_r($item->getAttributes());
    }
    echo "</pre>";
    $this->endBlock();

    echo Html::panel([
        'heading'   =>  'Results '.strtoupper($key),
        'body'      =>  $this->blocks['results'],
    ]);
}

echo "</div>";