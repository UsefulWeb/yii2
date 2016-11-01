<aside class="main-sidebar">

    <section class="sidebar">
        
        <?php if (!Yii::$app->user->isGuest): ?>
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
                </div>
                <div class="pull-left info">
                    <p><?= Yii::$app->user->identity->name  ?></p>

                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                </div>
            </div>
        <?php endif ?>
        
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu'],
                'items' => array_merge_recursive(
                    [

                        ['label' => 'Навигация', 'options' => ['class' => 'header']],
                        ['label' => 'Home', 'url' => ['/site/index']],
                    ],
                !Yii::$app->user->isGuest ?
                    [
                        ['label' => 'Friends notes', 'url' => ['/access/friendslist']],
                        [
                            'label' => 'Logout (' . Yii::$app->user->identity->username . ')',
                            'url' => ['/site/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ]
                    ]
                        :
                    [
                        ['label' => 'Login', 'url' => ['/site/login']]
                    ],
                    [
                        ['label' => 'About', 'url' => ['/site/about']],
                        ['label' => 'Contact', 'url' => ['/site/contact']],
                    ]),
                
            ]
        ) ?>

    </section>

</aside>
