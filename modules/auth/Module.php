<?php

namespace app\modules\auth;

use yii\base\BootstrapInterface;
use yii\web\GroupUrlRule;

/**
 * auth module definition class
 */
class Module extends \yii\base\Module implements BootstrapInterface
{
    /**
     * {@inheritdoc}
     */
    public $controllerNamespace = 'app\modules\auth\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {
        parent::init();

        // custom initialization code goes here
    }

    public function bootstrap($app)
    {
        $routeConfig = require __DIR__."/routes.php";
        $app->getUrlManager()->addRules(new GroupUrlRule($routeConfig));
    }
    
}
