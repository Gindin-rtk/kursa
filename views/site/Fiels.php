<?php

?>



<? foreach ($model as $key => $value) : ?>
    <a href="<?= Yii::$app->urlManager->createUrl(['site/dowland', 'id' =>$value->id ]) ?>" class="big-button"><?= $value->user.'<br>'; ?></a>

<? endforeach; ?>