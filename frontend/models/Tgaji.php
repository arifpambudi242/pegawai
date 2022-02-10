<?php

namespace app\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tgaji".
 *
 * @property int $id
 * @property int $id_pegawai
 * @property float $gaji_pokok
 * @property float $tunjangan_istri
 * @property float $tunjangan_anak
 * @property float $tunjangan_makan
 */
class Tgaji extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tgaji';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_pegawai', 'gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'required'],
            [['id', 'id_pegawai'], 'integer'],
            [['gaji_pokok', 'tunjangan_istri', 'tunjangan_anak', 'tunjangan_makan'], 'number'],
            [['id', 'id_pegawai'], 'unique', 'targetAttribute' => ['id', 'id_pegawai']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pegawai' => 'Id Pegawai',
            'gaji_pokok' => 'Gaji Pokok',
            'tunjangan_istri' => 'Tunjangan Istri',
            'tunjangan_anak' => 'Tunjangan Anak',
            'tunjangan_makan' => 'Tunjangan Makan',
        ];
    }

    public function getPegawai()
    {
        return ArrayHelper::map(Tpegawai::find()->select(['id', 'nama', 'nip'])->asArray()->all(), 'id', 'nama', ['id' => 'nip']);
    }
}
