<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $fullName
 * @property string $nickName
 * @property string $email
 * @property string $address
 * @property string $gender
 * @property integer $cellphoneNumber
 * @property string $comments
 * @property string $slug
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fullName', 'nickName', 'email', 'address', 'gender', 'cellphoneNumber', 'comments', 'slug'], 'required'],
            [['cellphoneNumber'], 'integer'],
            [['fullName', 'nickName'], 'string', 'max' => 25],
            [['email', 'address'], 'string', 'max' => 100],
            [['gender'], 'string', 'max' => 1],
            [['comments'], 'string', 'max' => 150],
            [['slug'], 'string', 'max' => 128],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fullName' => 'Full Name',
            'nickName' => 'Nick Name',
            'email' => 'Email',
            'address' => 'Address',
            'gender' => 'Gender',
            'cellphoneNumber' => 'Cellphone Number',
            'comments' => 'Comments',
            'slug' => 'Slug',
        ];
    }
}
