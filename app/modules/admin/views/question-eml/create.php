<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\QuestionEml */

$this->title = Yii::t('app', 'Create Question Eml');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Question Emls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="question-eml-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
