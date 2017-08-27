<?php

namespace backend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "article".
 *
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $author
 * @property integer $create_at
 * @property integer $cate_id
 * @property integer $status
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
            [['title','content','author','cate_id','status'],'required'],
            [['content'], 'string'],
            [['create_at'], 'integer'],
            ['great','safe'],
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
            'cate_id'=>'分类',
            'status'=>'状态',
            'create_at' => '创建时间',
        ];
    }

    //关联分类
    public static function getCategoryOption(){
        $cate = Category::find()->asArray()->all();
        return ArrayHelper::map($cate,'id','cate');
    }
}
