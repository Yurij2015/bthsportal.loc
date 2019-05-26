<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MotivationMeans */

$this->title = Yii::t('app', 'Update Motivation Means: {name}', [
    'name' => $model->idmotivation_means,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Motivation Means'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idmotivation_means, 'url' => ['view', 'id' => $model->idmotivation_means]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="motivation-means-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
