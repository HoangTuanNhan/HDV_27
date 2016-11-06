<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\redactor\widgets\Redactor;
use common\models\Category;
use kartik\file\FileInput;
use common\components\Util;
use kartik\password\PasswordInput;

/* @var $this yii\web\View */
/* @var $model common\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php
    $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']
    ]);
    ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>
    <?=
    $form->field($model, 'password')->widget(PasswordInput::classname(), [
        'pluginOptions' => [
            'showMeter' => true,
            'toggleMask' => false
        ]
    ]);
    ?>
    <?=
    $form->field($model, 'password_confirm')->widget(PasswordInput::classname(), [
        'pluginOptions' => [
            'showMeter' => true,
            'toggleMask' => false
        ]
    ]);
    ?>

   

    <?=
    $form->field($model, 'file_image')->widget(FileInput::classname(), [
        'options' => ['accept' => 'image/*'],
        'pluginOptions' => [
            'allowedFileExtensions' => ['jpg', 'gif', 'png'],
            'initialPreview' => [
                Html::img(Util::getUrlImage($model->avatar))
            ],
            'overwriteInitial' => true,
            'showUpload' => false,
            'showCaption' => false,
        ]
    ]);
    ?>



    <div class="form-group">
<?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>

</div>
