<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\GuardCategory */

$this->title = 'Create Guard Category';
$this->params['breadcrumbs'][] = ['label' => 'Guard Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guard-category-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
