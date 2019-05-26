<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AchievementEmplSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="achievement-empl-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'idachievement_empl') ?>

    <?= $form->field($model, 'user_id') ?>

    <?= $form->field($model, 'achievement_idachievement') ?>

    <?= $form->field($model, 'date_add') ?>

    <?= $form->field($model, 'date_up') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
