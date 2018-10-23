<?php

namespace myzero1\user\controllers;

use yii\web\Controller;

/**
 * Default controller for the `captcha` module
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            /*'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['cache', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],*/
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        // $this->layout = 'layout'; // using the view of module
        if ($this->module->theme == 'adminlteiframe') {
            // $this->layout = '//layout'; // using the view of app
            $this->layout = $this->module->indexLayout;
        }
        return $this->render('index'); // using the view of module
        // return $this->render('//index');  // using the view of app
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionCache()
    {
        return $this->render('cache');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionError()
    {
        return $this->render('error');
    }

}
