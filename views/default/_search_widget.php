<?php


use yii\helpers\Url;
use yii\web\JsExpression;

$url = Url::to(['/searchall/default/searchapi', 'object' => $key, 'search' => $searchForm->q ]);

$rawjs = <<< JAVASCRIPT
    $('#searchall-{$key}').load('{$url}');
JAVASCRIPT;

$js = new JsExpression($rawjs);

$this->registerJs($js);


?>
<div id="searchall-<?=$key?>">
    <strong>Searching</strong> <?=$key?>...
</div>

