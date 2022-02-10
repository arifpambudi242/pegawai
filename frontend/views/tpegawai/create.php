<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tpegawai */

$this->title = 'Create Tpegawai';
$this->params['breadcrumbs'][] = ['label' => 'Tpegawais', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tpegawai-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
