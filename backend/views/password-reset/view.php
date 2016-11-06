<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\PasswordResets */

$this->title = $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Password Resets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-resets-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->email], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->email], [
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
            'email:email',
            'token',
            'create_at',
            'update_at',
            'deelte_at',
        ],
    ]) ?>

</div>
