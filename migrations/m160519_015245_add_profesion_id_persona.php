<?php

use yii\db\Migration;

class m160519_015245_add_profesion_id_persona extends Migration
{
    public function up()
    {
        $this->addColumn('persona', 'profesion_id', 'integer');
        $this->addForeignKey(
            'profesion_persona',
            'persona',
            'profesion_id',
            'profesion',
            'id',
            'no action',
            'no action'
        );
    }

    public function down()
    {
        $this->dropForeignKey('profesion_persona', 'persona');
        $this->dropColumn('persona', 'profesion_id');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
