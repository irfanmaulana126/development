<?php

namespace backend\openticket\controllers;

use Yii;
use backend\openticket\models\AppDetailKtg;
use backend\openticket\models\AppDetailKtgSearch;
use backend\openticket\models\OpenTicket;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AppDetailKtgController implements the CRUD actions for AppDetailKtg model.
 */
class AppDetailKtgController extends Controller
{
    /**
     * {@inheritdoc}
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

    /**
     * Lists all AppDetailKtg models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new AppDetailKtgSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single AppDetailKtg model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->renderAjax('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new AppDetailKtg model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new AppDetailKtg();

        if ($model->load(Yii::$app->request->post())) {            
            $model->KODE_USER=Yii::$app->user->identity->id;
            $model->save(FALSE);
            return $this->redirect(['index']);
        }

        return $this->renderAjax('_form_create_modul', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing AppDetailKtg model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing AppDetailKtg model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }
    /**
     * apply job modul
     */
    public function actionApplyModul($id)
    {
        $model = new OpenTicket;
        $data = AppDetailKtg::findOne($id);
        if ($model->load(Yii::$app->request->post())) {
            $model->KODE_KTG=$data['KODE_KTG'];
            $model->KODE_MODUL=$id;
            $model->KODE_USER=Yii::$app->user->identity->id;
            $model->API_KEY=Yii::$app->user->identity->auth_key;
            // print_r($model);die();
            $model->save(false);
            return $this->redirect(['/admin/user-development']);
        } else {
            return $this->renderAjax('_form_apply', [
                'model' => $model,
                'data' => $data,
            ]);
        }
    }
    /**
     * Finds the AppDetailKtg model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return AppDetailKtg the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = AppDetailKtg::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
