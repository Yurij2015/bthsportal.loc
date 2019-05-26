<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AchievementEmpl */

$this->title = Yii::t('app', 'Update Achievement Empl: {name}', [
    'name' => $model->idachievement_empl,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Achievement Empls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->idachievement_empl, 'url' => ['view', 'id' => $model->idachievement_empl]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="achievement-empl-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
