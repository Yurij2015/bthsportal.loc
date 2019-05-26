<aside class="main-sidebar">

	<section class="sidebar">

		<?= dmstr\widgets\Menu::widget(
			[
				'options' => ['class' => 'sidebar-menu', 'data-widget' => 'tree',],
				'items'   => [
					['label' => 'MAIN NAVIGATION', 'options' => ['class' => 'header']],
					['label' => 'Панель', 'icon' => 'dashboard', 'url' => ['/admin/dashboard']],
                    ['label' => 'Метод иерархий',
                        'icon' => 'table',
                        'url' => ['/admin/mai'],
                        //'active' => 'mai' === Yii::$app->controller->id,
                    ],
                    ['label' => 'Сотрудники',
                        'icon' => 'users',
                        'url' => ['/admin/mai'],
                        //'active' => 'mai' === Yii::$app->controller->id,
                    ],
                    ['label' => 'Анкеты сотрудников',
                        'icon' => 'file-text-o',
                        'url' => ['/admin/mai'],
                        //'active' => 'mai' === Yii::$app->controller->id,
                    ],
                    ['label' => 'Средства н/мотивации',
                        'icon' => 'thumbs-up',
                        'url' => ['/admin/mai'],
                        //'active' => 'mai' === Yii::$app->controller->id,
                    ],
                    ['label' => 'Мотивация сотрудников',
                        'icon' => 'thumbs-o-up',
                        'url' => ['/admin/mai'],
                        //'active' => 'mai' === Yii::$app->controller->id,
                    ],
                    ['label' => 'Пользователи',
					 	'icon' => 'users',
					 	'url' => ['/admin/users'],
					 	'active' => 'users' === Yii::$app->controller->id,
					],
					['label' => 'Права доступа',
					 'icon' => 'lock',
					 'url' => ['/admin/rbac/permissions'],
					 'active' => 'permissions' === Yii::$app->controller->id,
					],
					[
						'label' => 'Настройки',
						'icon'  =>  'gears',
						'url'   => '#',
						'items' => [
							['label' => 'App', 'url' => ['/admin/settings/app']],
						],
					],
					[
						'label' => 'Генератор',
						'icon'  => 'share',
						'url'   => '#',
						'items' => [
							['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
							['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
							[
								'label' => 'Level One',
								'icon'  => 'circle-o',
								'url'   => '#',
								'items' => [
									['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
									[
										'label' => 'Level Two',
										'icon'  => 'circle-o',
										'url'   => '#',
										'items' => [
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
											['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
										],
									],
								],
							],
						],
					],
				],
			]
		) ?>

	</section>

</aside>
