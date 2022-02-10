<?php

use yii\db\Migration;

/**
 * Class m220210_062813_t_pegawai
 */
class m220210_062813_t_pegawai extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable(
            'tpegawai',
            [
                'id' =>    $this->primaryKey(),
                'nip' =>    $this->string(16)->notNull(),
                'nama' =>    $this->string(128)->notNull(),
                'jekel' =>    $this->string(1)->notNull(),
                'tempat_lahir' => $this->string(100)->notNull(),
                'tgl_lahir' =>    $this->date()->notNull(),
                'telpon' =>    $this->string(13)->notNull(),
                'agama' =>    $this->string(25)->notNull(),
                'alamat' =>    $this->string(128)->notNull(),
                'golongan' => $this->string(1)
            ]
        );
    }

    public function down()
    {
        return $this->dropTable('tpegawai');
    }
}
