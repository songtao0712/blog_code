<?php

use yii\db\Migration;

class m170622_184648_create_table_admin extends Migration
{
    public function up()
    {
        $this->createTable('admin',[
           'id'=>$this->primaryKey()->comment('主键'),
            'name'=>$this->string()->comment('管理员'),
            'password'=>$this->string()->comment('密码'),
            'create_at'=>$this->integer()->comment('创建时间'),
            'type'=>$this->integer()->comment('身份')
        ]);
    }

    public function down()
    {
        echo "m170622_184648_create_table_admin cannot be reverted.\n";

        return false;
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
