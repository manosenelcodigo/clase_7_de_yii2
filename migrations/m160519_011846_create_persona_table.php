<?php

use yii\db\Migration;

class m160519_011846_create_persona_table extends Migration
{
    public function up()
    {
        $this->createTable('persona', [
            'id'        => $this->primaryKey(),
            'nombre'    => $this->string(100)->notNull()->unique(),
            'biografia' => $this->text(),
            'fecha_nac' => $this->date(),
            'created_by' => $this->integer(),
            'created_at'    => $this->dateTime(),
            'updated_by' => $this->integer(),
            'updated_at'    => $this->dateTime(),
        ]);
        
        //$this->addPrimaryKey('pk_persona', 'persona', ['id', 'nombre']);
    }

    public function down()
    {
        $this->dropTable('persona');
    }
}
