<?php

use yii\db\Migration;

/**
 * Class m190807_035909_migration
 */
class m190807_035909_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $tableOption = null;
        if($this->db->driverName === 'mysql'){
            //http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOption = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable('{{%table_pemohon}}',[
            'id' => $this->primarykey(),
            'nama_pemohon' =>$this->string(30)->notNull(),
            'kecamatan' =>$this->string(30)->notNull(),
            'kelurahan' =>$this->string(30)->notNull(),
            'tanggal' =>$this->date('Y-m-d')->notNull(),
            'keterangan' =>$this->text(),
        ], $tableOption);

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190807_035909_migration cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190807_035909_migration cannot be reverted.\n";

        return false;
    }
    */
}
