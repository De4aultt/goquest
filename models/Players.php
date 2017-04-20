<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "players".
 *
 * @property integer $id
 * @property string $nickname
 * @property integer $quests
 * @property integer $rating
 * @property string $name
 * @property string $surname
 * @property string $email
 * @property integer $failed
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'players';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nickname'], 'required'],
            [['quests', 'rating', 'failed'], 'integer'],
            [['nickname', 'name', 'surname', 'email'], 'string', 'max' => 32],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nickname' => 'Nickname',
            'quests' => 'Quests',
            'rating' => 'Rating',
            'name' => 'Name',
            'surname' => 'Surname',
            'email' => 'Email',
            'failed' => 'Failed',
        ];
    }
}
