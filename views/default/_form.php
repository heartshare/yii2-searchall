<?php


use yii\widgets\ActiveForm;



?>
<div class="panel panel-default">
    <div class="panel-heading">Search</div>
    <div class="panel-body">
    <?php
        $form = ActiveForm::begin([
            'id' => 'searchall',
        ]);
        echo $form->field($searchForm, 'q')->textInput();
        ActiveForm::end();
    ?>
    </div>
</div>