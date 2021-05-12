<?php

use yii\bootstrap\ActiveForm;

?>



<div>
    <h1> Загрузка файла</h1>
</div>
<?
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

?>
<?= $form->field($model, 'user')?>
<?= $form->field($model, 'file')->fileInput(['multiple' => true, 'accept' => 'file']) ?>



    <button type="submit">запись</button>
<? ActiveForm::end(); ?>