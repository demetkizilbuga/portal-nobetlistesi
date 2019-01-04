<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GuardList */

$this->title = 'Update Guard List: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Guard Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guard-list-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
