<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Tgaji;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TgajiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tgajis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tgaji-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tgaji', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'id_pegawai',
            'gaji_pokok',
            'tunjangan_istri',
            'tunjangan_anak',
            //'tunjangan_makan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tgaji $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id, 'id_pegawai' => $model->id_pegawai]);
                }
            ],
        ],
    ]); ?>


</div>