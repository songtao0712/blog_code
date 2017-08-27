<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "guestbook".
 *
 * @property integer $id
 * @property string $username
 * @property string $content
 * @property integer $create_at
 * @property integer $status
 * @property integer $article_id
 */
class Guestbook extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'guestbook';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['content'], 'string'],
            [['create_at', 'status'], 'integer'],
            [['username'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
//    public function attributeLabels()
//    {
//        return [
//            'id' => '主键',
//            'username' => '用户名',
//            'content' => '内容',
//            'create_at' => '留言时间',
//            'status' => '审核状态',
//        ];
//    }

    //接收id
//    public function getId($id){
//        return $id;
//    }

    //获取所有留言
    public static function getAllGuest($id){
        return self::find()->where(['article_id'=>$id])->orderBy(['id'=>SORT_DESC])->all();
    }
}
