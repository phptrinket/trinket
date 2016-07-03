<?php

namespace app\controllers;

use app\models\Usuario;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{

    public $successUrl = 'Success';

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
                'auth' => [
                    'class' => 'yii\authclient\AuthAction',
                    'successCallback' => [$this, 'oAuthSuccess'],
                ],

        ];
    }

    

    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->render('index');
        }
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->render('index');



    }

    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    public function actionAbout()
    {
        return $this->render('about');
    }

    public function oAuthSuccess($client) {
        $userAttributes = $client->getUserAttributes();
        $user= New Usuario();

        $user->email=$userAttributes['email'];
        $user->username=$userAttributes['name'];
        $user->senha=$userAttributes['name'];
        $user->save();
        $user = Usuario::find()->where(['email'=>$userAttributes['email']])->one();
        if(!empty($user)){
            Yii::$app->user->login($user);

        }else{
            // Save session attribute user from FB
            $session = Yii::$app->session;
            $session['attributes']=$userAttributes;
            // redirect to form signup, variabel global set to successUrl
            $this->successUrl = \yii\helpers\Url::to(['login']);
        }
}

}
