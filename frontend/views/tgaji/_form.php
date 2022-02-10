<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Tpegawai;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\Tgaji */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tgaji-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_pegawai')->dropDownList($model->getPegawai()) ?>

    <?= $form->field($model, 'gaji_pokok')->textInput() ?>

    <?= $form->field($model, 'tunjangan_istri')->textInput() ?>

    <?= $form->field($model, 'tunjangan_anak')->textInput() ?>

    <?= $form->field($model, 'tunjangan_makan')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>