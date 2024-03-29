<?php

use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */
?>

<header class="main-header">

	<?= Html::a('<span class="logo-mini">SPM</span><span class="logo-lg">' . Yii::$app->name . '</span>',
		Yii::$app->homeUrl, ['class' => 'logo']) ?>

	<nav class="navbar navbar-static-top" role="navigation">

		<a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
			<span class="sr-only">Toggle navigation</span>
		</a>

		<div class="navbar-custom-menu">

			<ul class="nav navbar-nav">

				<!-- Messages: style can be found in dropdown.less-->


				<li class="dropdown user user-menu">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<img src="<?= $adminlteAssets ?>/img/user2-160x160.jpg" class="user-image" alt="User Image"/>
						<span class="hidden-xs"><?= Html::encode(Yii::$app->user->identity->username) ?></span>
					</a>
					<ul class="dropdown-menu">
						<!-- User image -->
						<li class="user-header">
							<img src="<?= $adminlteAssets ?>/img/user2-160x160.jpg" class="img-circle"
								 alt="User Image"/>
						</li>
						<!-- Menu Footer-->
						<li class="user-footer">
							<div class="pull-right">
								<?= Html::a(
									'Sign out',
									['/auth/logout'],
									['data-method' => 'post', 'class' => 'btn btn-default btn-flat']
								) ?>
							</div>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
</header>
