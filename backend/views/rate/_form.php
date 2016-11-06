<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Rates */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rates-form">

    <?php $form = ActiveForm::begin(); ?>

   <?= $form->field($model, 'user_id')->dropDownList(\common\models\Users::listUser()) ?>
    <?= $form->field($model, 'restaurant_id')->dropDownList(\common\models\Restaurants::listRestaurant()) ?>

    <?= $form->field($model, 'point')->textInput() ?>

   

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
