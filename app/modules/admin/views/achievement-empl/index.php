<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\AchievementEmplSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Achievement Empls');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="achievement-empl-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Achievement Empl'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'idachievement_empl',
            'user_id',
            'achievement_idachievement',
            'date_add',
            'date_up',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
