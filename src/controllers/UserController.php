<?php

namespace myzero1\user\controllers;

use yii\web\Controller;

/**
 * Default controller for the `captcha` module
 */
class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => \yii\filters\VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogin()
    {
        return $this->render('cache');
    }

    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionLogout()
    {
        return $this->render('error');
    }

}
