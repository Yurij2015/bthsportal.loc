<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\Question */

$this->title = Yii::t('app', 'Update Question: {name}', [
    'name' => $model->idquestion,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Questions'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idquestion, 'url' => ['view', 'id' => $model->idquestion]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="question-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
