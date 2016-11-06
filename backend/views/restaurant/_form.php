<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\redactor\widgets\Redactor;
use common\models\Category;
use kartik\file\FileInput;
use common\components\Util;
use kartik\date\DatePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Restaurants */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="restaurants-form">

    <?php
    $form = ActiveForm::begin([
                'options' => ['enctype' => 'multipart/form-data'] // important
    ]);
    ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detail')->textarea(['rows' => 6]) ?>

    <?=
    $form->field($model, 'file_image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'initialPreview' => [
                Html::img(Util::getUrlImage($model->image))
            ],
            'overwriteInitial' => true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]);
    ?>
    <?= $form->field($model, 'address_id')->dropDownList(\common\models\Addresses::listAddress()) ?>
    <?= $form->field($model, 'restaurant_category_id')->textInput() ?>
<?= $form->field($model, 'time_open')->textInput() ?>
<?= $form->field($model, 'time_close')->textInput() ?>  




    <?= $form->field($model, 'price_min')->textInput() ?>

    <?= $form->field($model, 'price_max')->textInput() ?>

<?= $form->field($model, 'point')->textInput() ?>



    <div class="form-group">
    <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
