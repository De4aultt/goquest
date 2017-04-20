<?php

namespace app\modules\result;

/**
 * result module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\result\controllers';

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
