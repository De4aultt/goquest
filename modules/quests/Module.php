<?php

namespace app\modules\quests;

/**
 * quests module definition class
 */
class Module extends \yii\base\Module
{
    /**
     * @inheritdoc
     */
    public $controllerNamespace = 'app\modules\quests\controllers';

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
