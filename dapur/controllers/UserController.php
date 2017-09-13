<?php

namespace dapur\controllers;

use Yii;
use dapur\models\User;
use dapur\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;


/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','change-password'],
                'rules' => [
                    [
                        'actions' => ['index','change-password'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                  
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all User models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

   

     public function actionChangePassword()
    {
        // set up user and load post data
        $user = Yii::$app->user->identity;
        $loadedPost = $user->load(Yii::$app->request->post());

        // validate for normal request
        if($loadedPost && $user->validate()){
            $user->password = $user->newPassword;
            // save, set flash, and refresh page
            $user->save(false);
            // var_dump($user);
            Yii::$app->session->setFlash('success', 'Password berhasil diganti');
            return $this->refresh();
        }

        // render
        return $this->render('changePassword', ['user' => $user]);
    }

   

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
