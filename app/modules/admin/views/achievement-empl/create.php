<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\AchievementEmpl */

$this->title = Yii::t('app', 'Create Achievement Empl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Achievement Empls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievement-empl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
