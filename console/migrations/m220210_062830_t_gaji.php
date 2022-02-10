<?php

use yii\db\Migration;

/**
 * Class m220210_062830_t_gaji
 */
class m220210_062830_t_gaji extends Migration
{

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->createTable(
            'tgaji',
            [
                'id' =>        $this->tinyInteger()->notNull(),
                'id_pegawai' =>    $this->tinyInteger()->notNull(),
                'gaji_pokok' =>    $this->float()->notNull(),
                'tunjangan_istri' =>    $this->float()->notNull(),
                'tunjangan_anak' =>    $this->float()->notNull(),
                'tunjangan_makan' =>    $this->float()->notNull()
            ]
        );
        $this->addPrimaryKey('pegawaixgaji', 'tgaji', [
            'id',
            'id_pegawai'
        ]);

        $this->alterColumn('tgaji', 'id', $this->primaryKey() . ' AUTO_INCREMENT');
    }

    public function down()
    {
        return $this->dropTable('tgaji');
    }
}
