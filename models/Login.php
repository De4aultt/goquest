<?php

namespace app\models;

use yii\base\Model;

class Login extends Model{
    public $nickname;
    public $password;
    public $email;
    public $name;
    public $surname;

    public function rules()
    {
        return [
            [['nickname','password'], 'required'],
            ['password','validatePassword']
        ];
    }

    public function validatePassword($attribute)
    {

            $user = $this->getUser();
            if(!$user || !$user->validatePassword($this->password))
            {
                $this->addError($attribute,'Пароль або ім\'я користувача введено невірно!');
            }

    }



    public function getUser()
    {
        return User::findOne(['nickname'=>$this->nickname]);
    }

}
