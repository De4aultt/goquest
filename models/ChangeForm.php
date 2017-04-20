<?php
namespace app\models;

class ChangeForm extends \yii\base\Model
{
    public $email;
    public $nickname;
    public $password;

    public function rules()
    {
        return [
            // тут определяются правила валидации
        ];
    }
}