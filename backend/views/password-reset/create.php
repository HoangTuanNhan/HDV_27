<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\PasswordResets */

$this->title = 'Create Password Resets';
$this->params['breadcrumbs'][] = ['label' => 'Password Resets', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="password-resets-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
