<?php

namespace app\modules\profile;

/**
 * profile module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\profile\controllers';

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