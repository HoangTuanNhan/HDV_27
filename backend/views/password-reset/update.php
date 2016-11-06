<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\PasswordResets */

$this->title = 'Update Password Resets: ' . $model->email;
$this->params['breadcrumbs'][] = ['label' => 'Password Resets', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->email, 'url' => ['view', 'id' => $model->email]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="password-resets-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
