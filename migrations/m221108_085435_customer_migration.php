<?php

use yii\db\Migration;

/**
 * Class m221108_085435_customer_migration
 */
class m221108_085435_customer_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('customer',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string(),
            'email'=>$this->string(),
            'status'=>$this->boolean()
        ]);

        $this->insert('customer',[
            'username' => 'Adi',
            'email'=> 'ceva@exemplu.com',
            'status' => 1
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('customer');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m221108_085435_customer_migration cannot be reverted.\n";

        return false;
    }
    */
}
