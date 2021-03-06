<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Form */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="form-form">

    <?php $form = ActiveForm::begin(); ?>
    
    <?= $form->field($model, 'nr')->textInput() ?>

    <?= $form->field($model, 'omschrijving')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'instructie')->textInput(['maxlength' => true])->textArea( ['style'=>'width:600px'] ) ?>


    <?= HTMLInclude('formSave') ?>

    <?php ActiveForm::end(); ?>

</div>
