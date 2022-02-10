<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Tpegawai;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TpegawaiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tpegawais';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tpegawai-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tpegawai', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); 
    ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'nip',
            'nama',
            'jekel',
            'tempat_lahir',
            //'tgl_lahir',
            //'telpon',
            //'agama',
            //'alamat',
            //'golongan',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Tpegawai $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                }
            ],
        ],
    ]); ?>


</div>