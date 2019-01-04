<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GuardList */

$this->title = 'Create Guard List';
$this->params['breadcrumbs'][] = ['label' => 'Guard Lists', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guard-list-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
