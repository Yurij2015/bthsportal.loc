<?php

/**
 * @var \yii\web\View $this
 * @var \app\forms\RegisterForm $model
 */

use yii\bootstrap\ActiveForm;
use yii\helpers\Html;

$this->title = 'Register';
$this->params['breadcrumbs'][] = $this->title;

?>
<div class="site-register">
	<h1><?= Html::encode($this->title) ?></h1>

	<p>Please fill out the following fields to login:</p>
	
	<?php $form = ActiveForm::begin([
		'id'          => 'register-form',
		'layout'      => 'horizontal',
	]); ?>
	
	<?= $form->field($model, 'email')->textInput([
		'autofocus' => true,
		'type'      => 'email',
	]) ?>
	<?= $form->field($model, 'firstName')->textInput() ?>
	<?= $form->field($model, 'lastName')->textInput() ?>
	<?= $form->field($model, 'password')->passwordInput() ?>
	<?= $form->field($model, 'passwordRepeat')->passwordInput() ?>

	<div class="form-group">
		<div class="col-md-6 col-md-offset-3">
			<?= Html::submitButton('Register', ['class' => 'btn btn-primary']) ?>
		</div>
	</div>
	
	<?php ActiveForm::end(); ?>

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<p>Already have an account? <?= Html::a('Login!', ['auth/login']) ?></p>
		</div>
	</div>
</div>