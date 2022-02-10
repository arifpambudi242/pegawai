<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tgaji */

$this->title = 'Create Tgaji';
$this->params['breadcrumbs'][] = ['label' => 'Tgajis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgaji-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
