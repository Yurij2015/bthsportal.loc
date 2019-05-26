<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\QuestionEml */

$this->title = Yii::t('app', 'Update Question Eml: {name}', [
    'name' => $model->idquestionary_eml,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Question Emls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idquestionary_eml, 'url' => ['view', 'id' => $model->idquestionary_eml]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="question-eml-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
