<?php

use yii\db\Migration;

class m170622_192251_create_table_article extends Migration
{
    public function up()
    {
        $this->createTable('article',[
           'id'=>$this->primaryKey()->comment('主键'),
            'title'=>$this->string()->comment('标题'),
            'content'=>$this->text()->comment('内容'),
            'author'=>$this->string()->comment('作者'),
            'create_at'=>$this->integer()->comment('创建时间')
        ]);
    }

    public function down()
    {
        echo "m170622_192251_create_table_article cannot be reverted.\n";

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
