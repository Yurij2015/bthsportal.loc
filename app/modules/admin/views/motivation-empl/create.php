<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MotivationEmpl */

$this->title = Yii::t('app', 'Create Motivation Empl');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Motivation Empls'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="motivation-empl-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
