<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ciudades */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ciudades-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomb_ciudades')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'comu_ciudades')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
