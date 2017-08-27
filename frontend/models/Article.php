<?php

namespace frontend\models;

use backend\models\Category;
use Yii;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $author
 * @property integer $cate_id
 * @property integer $status
 * @property integer $create_at
 * @property integer $great
 */
class Article extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'article';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['cate_id', 'status', 'create_at', 'great'], 'integer'],
            [['title', 'author'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => '主键',
            'title' => '标题',
            'content' => '内容',
            'author' => '作者',
            'cate_id' => '分类',
            'status' => '状态',
            'create_at' => '创建时间',
            'great' => '点赞',
        ];
    }

    public function getCateInfo(){
        return $this->hasMany(Category::className(),['id'=>'cate_id']);
    }
}
