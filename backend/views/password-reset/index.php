<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\PasswordResetSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Password Resets';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-resets-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Password Resets', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'email:email',
            'token',
            'create_at',
            'update_at',
            'deelte_at',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
