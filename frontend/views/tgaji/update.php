<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tgaji */

$this->title = 'Update Tgaji: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Tgajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id, 'id_pegawai' => $model->id_pegawai]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tgaji-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
