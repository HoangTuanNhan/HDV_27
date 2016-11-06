<?php

use common\components\Util;
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= Util::getUrlImage(Yii::$app->user->identity->avatar) ?>" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username ?></p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                        ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                        [
                            'label' => Yii::t('app', 'User'),
                            'icon' => 'glyphicon glyphicon-user',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user'],],
                                ['label' => Yii::t('app', 'Create User'), 'icon' => 'fa fa-circle-o', 'url' => ['/user/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Category'),
                            'icon' => 'fa fa-map',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Category'), 'icon' => 'fa fa-circle-o', 'url' => ['/category'],],
                                ['label' => Yii::t('app', 'Create Category'), 'icon' => 'fa fa-circle-o', 'url' => ['/category/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Food'),
                            'icon' => 'fa fa-asterisk',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Food'), 'icon' => 'fa fa-circle-o', 'url' => ['/food'],],
                                ['label' => Yii::t('app', 'Create Food'), 'icon' => 'fa fa-circle-o', 'url' => ['/food/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Comment'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Comment'), 'icon' => 'fa fa-circle-o', 'url' => ['/comment'],],
                                ['label' => Yii::t('app', 'Create Comment'), 'icon' => 'fa fa-circle-o', 'url' => ['/comment/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'PasswordReset'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List PasswordReset'), 'icon' => 'fa fa-circle-o', 'url' => ['/password-reset'],],
                                ['label' => Yii::t('app', 'Create PasswordReset'), 'icon' => 'fa fa-circle-o', 'url' => ['/password-reset/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'RestaurantCategories'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List RestaurantCategories'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant-categoy'],],
                                ['label' => Yii::t('app', 'Create RestaurantCategories'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant-categoy/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Restaurant'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Restaurant'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant'],],
                                ['label' => Yii::t('app', 'Create Restaurant'), 'icon' => 'fa fa-circle-o', 'url' => ['/restaurant/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Addresses'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Addresses'), 'icon' => 'fa fa-circle-o', 'url' => ['/addresses'],],
                                ['label' => Yii::t('app', 'Create Addresses'), 'icon' => 'fa fa-circle-o', 'url' => ['/addresses/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'Cities'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List Cities'), 'icon' => 'fa fa-circle-o', 'url' => ['/city'],],
                                ['label' => Yii::t('app', 'Create Cities'), 'icon' => 'fa fa-circle-o', 'url' => ['/city/create'],],
                            ],
                        ],
                        [
                            'label' => Yii::t('app', 'District'),
                            'icon' => 'fa fa-file-excel-o',
                            'url' => '#',
                            'items' => [
                                ['label' => Yii::t('app', 'List District'), 'icon' => 'fa fa-circle-o', 'url' => ['/district'],],
                                ['label' => Yii::t('app', 'Create District'), 'icon' => 'fa fa-circle-o', 'url' => ['/district/create'],],
                            ],
                        ],
                        ['label' => 'Login', 'icon' => 'fa  fa-sign-out', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ],
                ]
        )
        ?>

    </section>

</aside>
