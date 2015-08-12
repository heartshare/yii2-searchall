<?php



use kartik\helpers\Html;




echo "<div id='searchall-{$key}'>";

echo Html::panel([
    'heading'   =>  'Results '.strtoupper($key),
    'body'      =>  "<pre>".print_r($items,true)."</pre>",
]);

echo "</div>";