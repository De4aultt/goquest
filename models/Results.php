<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "results".
 *
 * @property integer $result_id
 * @property string $data
 * @property integer $player_id
 * @property integer $quest_id
 * @property integer $success
 * @property integer $points
 *
 * @property User $player
 */
class Results extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'results';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['data'], 'safe'],
            [['player_id', 'quest_id', 'success'], 'required'],
            [['player_id', 'quest_id', 'success', 'points'], 'integer'],
            [['player_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['player_id' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'result_id' => 'Result ID',
            'data' => 'Data',
            'player_id' => 'Player ID',
            'quest_id' => 'Quest ID',
            'success' => 'Success',
            'points' => 'Points',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPlayer()
    {
        return $this->hasOne(User::className(), ['id' => 'player_id']);
    }
}
