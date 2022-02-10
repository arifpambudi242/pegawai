<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tpegawai".
 *
 * @property int $id
 * @property string|null $nip
 * @property string|null $nama
 * @property string|null $jekel
 * @property string|null $tempat_lahir
 * @property string|null $tgl_lahir
 * @property string|null $telpon
 * @property string|null $agama
 * @property string|null $alamat
 * @property string|null $golongan
 */
class Tpegawai extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tpegawai';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tgl_lahir'], 'safe'],
            [['nip'], 'string', 'max' => 16],
            [['nama', 'alamat'], 'string', 'max' => 128],
            [['jekel', 'golongan'], 'string', 'max' => 1],
            [['tempat_lahir'], 'string', 'max' => 100],
            [['telpon'], 'string', 'max' => 13],
            [['agama'], 'string', 'max' => 25],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nip' => 'Nip',
            'nama' => 'Nama',
            'jekel' => 'Jekel',
            'tempat_lahir' => 'Tempat Lahir',
            'tgl_lahir' => 'Tgl Lahir',
            'telpon' => 'Telpon',
            'agama' => 'Agama',
            'alamat' => 'Alamat',
            'golongan' => 'Golongan',
        ];
    }
}
