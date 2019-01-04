<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\GuardCategory */

$this->title = 'Update Guard Category: ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Guard Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="guard-category-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
