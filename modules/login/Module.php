<?php

namespace app\modules\login;

/**
 * login module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\login\controllers';

    /**
     * @inheritdoc
     */
    public function init()
    {

        parent::init();
        $this->setLayoutPath('@app/views/layouts');
        // custom initialization code goes here
    }
}
