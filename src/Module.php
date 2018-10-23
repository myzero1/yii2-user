<?php

namespace myzero1\user;

use Yii;

/**
 * Site module definition class
 */
class Module extends \yii\base\Module implements \yii\base\BootstrapInterface
{
    /**
     * @inheritdoc
     */
    public $theme = 'adminlteiframe'; // adminlteiframe,adminlte

    /**
     * @inheritdoc
     */
    public $defaultLayout = '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlteiframe/layouts/main';

    /**
     * @inheritdoc
     */
    public $indexLayout = '@vendor/myzero1/yii2-theme-adminlteiframe/src/views/adminlteiframe/layouts/layout';

    /**
     * {@inheritdoc}
     */
    public function bootstrap($app)
    {
        if ($app instanceof \yii\web\Application) {
          /*  $app->controllerMap['site'] = [
                'class'=>'myzero1\site\controllers\SiteController'
            ];*/
            $app->getUrlManager()->addRules([
                [
                    'class' => 'yii\web\UrlRule',
                    'pattern' => '/',
                    'route' => $this->id . '/site/index'
                ],
                [
                    'class' => 'yii\web\UrlRule',
                    'pattern' => '/site',
                    'route' => $this->id . '/site/index'
                ],
                [
                    'class' => 'yii\web\UrlRule',
                    'pattern' => '/site/<action>',
                    'route' => $this->id . '/site/<action>'
                ],
            ], false);

            $app->layout = $this->defaultLayout;

        } elseif ($app instanceof \yii\console\Application) {
            //
        }
    }

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
    }

}
