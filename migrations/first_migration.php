<?php

use yii\db\Migration;

/**
 * Class m221108_075151_first_migration
 */
class m221108_075151_first_migration extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('user',[
            'id'=>$this->primaryKey(),
            'username'=>$this->string(255),
            'status'=> $this->boolean(),
            'created_at'=>$this->timestamp()
        ]);

        $this->addColumn('user','email',$this->string(512));

        $this->createTable('post',[
            'FK_post_user'=>$this->integer(),
            'title'=>$this->string(),
            'user_id'=> $this->integer(),
        ]);

        $this->addForeignKey('FK_post_user','post','user_id','user','id');

        $this->insert('user',[
            'username' => 'Adi',
            'email'=> 'ceva@exemplu.com',
            'status' => 1,
            'created_at' =>date('d M Y H:m:s')
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropForeignKey('FK_post_user','post');
        $this->dropTable('post');
        $this->dropTable('user');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        
    }*/
    
}
