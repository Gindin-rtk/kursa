<?php


use yii\helpers\Html;

$this->params['breadcrumbs'][] = $this->title;
//\yii\helpers\VarDumper::dump($model);
//$model = $model ? $model : [];
?>

<?= $model->file.'<br>'; ?>
<?php foreach ($model as $file):
?>
<?php endforeach; ?>

<?php
echo html::a('dowland','./uploads/'.$model->file, ['class'=>'btn btn-primary']);

?>
