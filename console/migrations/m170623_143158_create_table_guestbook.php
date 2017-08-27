<?php

use yii\db\Migration;

class m170623_143158_create_table_guestbook extends Migration
{
    public function up()
    {
        $this->createTable('guestbook',[
           'id'=>$this->primaryKey()->comment('主键'),
            'username'=>$this->string()->comment('用户名'),
            'content'=>$this->text()->comment('内容'),
            'create_at'=>$this->integer()->comment('留言时间'),
            'status'=>$this->integer()->comment('审核状态')
        ]);
    }

    public function down()
    {
        echo "m170623_143158_create_table_guestbook cannot be reverted.\n";

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
