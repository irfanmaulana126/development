<?php

namespace backend\admin\controllers;

use Yii;
use backend\admin\models\UserDevelopment;
use backend\admin\models\UserDevelopmentSearch;
use backend\admin\models\AppDetailKtg;
use backend\admin\models\AppDetailKtgSearch;
use backend\admin\models\OpenTicket;
use backend\admin\models\OpenTicketSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserDevelopmentController implements the CRUD actions for UserDevelopment model.
 */
class UserDevelopmentController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }
    public function beforeAction($action){
        $modulIndentify=4; //OUTLET
       // Check only when the user is logged in.
       // Author piter Novian [ptr.nov@gmail.com].
       if (!Yii::$app->user->isGuest){          
           if (Yii::$app->session['userSessionTimeout']< time() ) {
               // timeout
               Yii::$app->user->logout();
               return $this->goHome(); 
           } else {	
               //add Session.
                Yii::$app->session->set('userSessionTimeout', time() + Yii::$app->params['sessionTimeoutSeconds']);
                return true;
            }
        }else{
           Yii::$app->user->logout();
           return $this->goHome(); 
       }
   }
    /**
     * Lists all UserDevelopment models.
     * @return mixed
     */
    public function actionIndex()
    {        
        $user = (empty(Yii::$app->user->identity->id)) ? '' : Yii::$app->user->identity->id;
        $dataProvider = UserDevelopmentSearch::findOne(['id'=>$user]);        
        $searchModelKtg = new AppDetailKtgSearch();
        $dataProviderKtg = $searchModelKtg->search(Yii::$app->request->queryParams);
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'dataProviderKtg' => $dataProviderKtg,
            'searchModelKtg' => $searchModelKtg,
        ]);
    }

    /**
     * Displays a single UserDevelopment model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserDevelopment model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserDevelopment();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing UserDevelopment model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    public function actionCreateModul($id)
    {
        $model = new AppDetailKtg;

        if ($model->load(Yii::$app->request->post())) {
            $model->KODE_USER=$id;
            // print_r($model);die();
            $model->save();
            return $this->redirect(['index']);
        } else {
            return $this->renderAjax('_form_create_modul', [
                'model' => $model,
            ]);
        }
    }
    public function actionViewModul($id)
    {
        $model = AppDetailKtg::findOne($id);
        return $this->renderAjax('view_modul', [
            'model' => $model,
        ]);
    }
    public function actionOpenTicket($id)
    {
        $model = new OpenTicket;
        $data = AppDetailKtg::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->KODE_MODUL=$id;
            $model->KODE_USER=Yii::$app->user->identity->id;
            $model->API_KEY=Yii::$app->user->identity->auth_key;
            // print_r($model);die();
            $model->save(false);
            return $this->redirect(['index']);
        } else {
            return $this->renderAjax('_form_open_ticket', [
                'model' => $model,
                'data' => $data,
            ]);
        }
    }
    public function actionChange($id)
    {
        $model =  UserDevelopment::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->Password = $model->newPassword;
            if ($model->save(false)) {
                Yii::$app->session->setFlash('success', "Change Password Berhasil");
                return $this->redirect(['index']);   
            }
        return $this->redirect(['index']);
        }

        return $this->renderAjax('_form_change', [
            'model' => $model,
        ]);
    }
    /**
     * Deletes an existing UserDevelopment model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the UserDevelopment model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserDevelopment the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserDevelopment::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
