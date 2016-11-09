<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Permissions */

$this->title = 'Create Permissions';
$this->params['breadcrumbs'][] = ['label' => 'Permissions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="permissions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="permissions-form">

        <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'permission_id')->dropDownList(\common\models\Permissions::listRoleper()) ?>

        <?= $form->field($model, 'role_id')->dropDownList(\common\models\Roles::listRole()) ?>
        <div class="form-group">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
