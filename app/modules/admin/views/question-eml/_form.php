<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\QuestionEml */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="question-eml-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'question_idquestion')->textInput() ?>

    <?= $form->field($model, 'achievement_idachievement')->textInput() ?>

    <?= $form->field($model, 'answertoquestion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'date_add')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
