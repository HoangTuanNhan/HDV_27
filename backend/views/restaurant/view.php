<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use common\components\Util;
/* @var $this yii\web\View */
/* @var $model common\models\Restaurants */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Restaurants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="restaurants-view">

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
            'name',
            'detail:ntext',
             [
                'attribute'=>'image',
                'value'=>  Util::getUrlImage($model->image),
                'format' => ['image',['width'=>'200','height'=>'200']],
            ],
            'restaurant_category_id',
            'address_id',
            'time_open',
            'time_close',
            'price_min',
            'price_max',
            'point',
            'create_at:date',
            'update_at:date',
            'delete_at:date',
        ],
    ]) ?>

</div>
