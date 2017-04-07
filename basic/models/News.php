<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $Complete_Name
 * @property string $slug
 * @property string $Nickname
 * @property string $Email_Address
 * @property string $Home_Address
 * @property string $Gender
 * @property string $Cellphone_Number
 * @property string $Comments
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
            [['Complete_Name', 'slug', 'Nickname', 'Email_Address', 'Gender', 'Cellphone_Number'], 'required'],
            [['Nickname', 'Email_Address', 'Comments'], 'string'],
            [['Complete_Name', 'slug', 'Home_Address'], 'string', 'max' => 128],
            [['Gender'], 'string', 'max' => 1],
            [['Cellphone_Number'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Complete_Name' => 'Complete  Name',
            'slug' => 'Slug',
            'Nickname' => 'Nickname',
            'Email_Address' => 'Email  Address',
            'Home_Address' => 'Home  Address',
            'Gender' => 'Gender',
            'Cellphone_Number' => 'Cellphone  Number',
            'Comments' => 'Comments',
        ];
    }
}
