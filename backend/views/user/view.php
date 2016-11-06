<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
/* @var $this yii\web\View */
/* @var $model common\models\Users */

$this->title = $model->username;
$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'username',
            'email:email',
            'password_hash',
           // 'remember_token',
            //'password_reset_token',
             [
                'attribute'=>'image',
                'value'=>  Util::getUrlImage($model->avatar),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'created_at:date',
            'updated_at:date',
            'deleted_at:date',
        ],
    ]) ?>

</div>
