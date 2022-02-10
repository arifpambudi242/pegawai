<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \yii\jui\DatePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Tpegawai */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tpegawai-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'jekel')->dropDownList(
        [
            '' => 'Pilih Jenis Kelamin',
            'L' => 'Laki-laki',
            'P' => 'Perempuan',
        ]
    ) ?>

    <?= $form->field($model, 'tempat_lahir')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tgl_lahir')->widget(DatePicker::classname(), [
        'dateFormat' => 'yyyy-MM-dd',
        'options' => ['class' => 'form-control']
    ]) ?>

    <?= $form->field($model, 'telpon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'agama')->dropDownList(
        [
            '' => 'Pilih Agama',
            'Islam' => 'Islam',
            'Kristen' => 'Kristen',
            'Katolik' => 'Katolik',
            'Hindu' => 'Hindu',
            'Konghuchu' => 'Konghuchu'
        ]
    ) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'golongan')->dropDownList(
        [
            '' => 'Pilih Golongan',
            'A' => 'IIIA',
            'B' => 'IIIB',
            'C' => 'IIIC',
            'D' => 'IIID',
            'E' => 'IVA',
            'F' => 'IVB',
            'G' => 'IVC',
            'H' => 'IVD',
        ]
    )
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>