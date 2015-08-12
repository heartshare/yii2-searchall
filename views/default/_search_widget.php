<?php


use kartik\helpers\Html;
use yii\helpers\Url;
use yii\web\JsExpression;

$url = Url::to(['/searchall/default/searchapi', 'object' => $key, 'search' => $searchForm->q ]);

$rawjs = <<< JAVASCRIPT
    $('#searchall-{$key}').load('{$url}');
JAVASCRIPT;

$js = new JsExpression($rawjs);

$this->registerJs($js);

echo "<div id='searchall-{$key}'>";

echo Html::panel([
    'heading'   =>  'Search '.strtoupper($key),
    'body'      =>  "<strong>Searching</strong> {$key}...",
]);

echo "</div>";

