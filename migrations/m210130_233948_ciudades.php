<?php

use yii\db\Migration;

/**
 * Class m210130_233948_ciudades
 */
class m210130_233948_ciudades extends Migration
{
    public function Up()
    { 
         $options = null;
     if ( $this->db->driverName === 'mysql' ) {
         $options = 'CHARACTER SET utf8 COLLATE utf8_spanish_ci ENGINE=innodb';
     }
         $this->createTable('{{ciudades}}', [   
             'id_ciudades' => $this->primaryKey(),
             'nomb_ciudades' => $this->string(50)->notNull(), //nombre
             'comu_ciudades' => $this->string(50)->notNull(), //Comuna
             ], $options);
     }
     public function Down()
     {
         $this->dropTable('{{ciudades}}');
     }
}
