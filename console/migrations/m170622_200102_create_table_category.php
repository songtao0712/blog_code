<?php

use yii\db\Migration;

class m170622_200102_create_table_category extends Migration
{
    public function up()
    {
        $this->createTable('category',[
           'id'=>$this->primaryKey()->comment('主键'),
            'cate'=>$this->string()->comment('分类名'),
            'status'=>$this->integer()->comment('状态')
        ]);
    }

    public function down()
    {
        echo "m170622_200102_create_table_category cannot be reverted.\n";

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
