<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\RateSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-search">

    <?php
    $form = ActiveForm::begin([
                'action' => ['index'],
                'method' => 'get',
    ]);
    ?>
    <?= $form->field($model, 'id') ?>
    <?= $form->field($model, 'user_id')->dropDownList(\common\models\Users::listUser()) ?>
    <?= $form->field($model, 'restaurant_id')->dropDownList(\common\models\Restaurants::listRestaurant()) ?>
    <?= $form->field($model, 'point') ?>


    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
