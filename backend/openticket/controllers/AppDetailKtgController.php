<?php

namespace backend\openticket\controllers;

use Yii;
use backend\openticket\models\AppDetailKtg;
use backend\openticket\models\AppDetailKtgSearch;
use backend\openticket\models\OpenTicket;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
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
    
	/*
	 * Print PDF
	 * @author ptrnov <piter@lukison.com>
	 * @since 1.2
	*/
    public function actionPdf($id)
    {
		
		$content= $this->renderPartial( 'view', [
            'model' => $this->findModel($id),
        ]);
		$pdf = new Pdf([
			// set to use core fonts only
			'mode' => Pdf::MODE_CORE,
			//'mime' => 'application/pdf',
			// A4 paper format
			'format' => Pdf::FORMAT_A4,
			// portrait orientation
			'orientation' => Pdf::ORIENT_PORTRAIT,
			// stream to browser inline
			'destination' => Pdf::DEST_BROWSER,
			//'destination' => Pdf::DEST_FILE ,
			// your html content input
			'content' => $content,
			// format content from your own css file if needed or use the
			// enhanced bootstrap css built by Krajee for mPDF formatting
			//D:\xampp\htdocs\advanced\lukisongroup\web\widget\pdf-asset
			//'cssFile' => '@frontend/web/template/pdf-asset/kv-mpdf-bootstrap.min.css',
			'cssFile' => '@vendor/kartik-v/yii2-mpdf/assets/kv-mpdf-bootstrap.min.css',
			// any css to be embedded if required
			'cssInline' => '.kv-heading-1{font-size:12px}',
			 // set mPDF properties on the fly
			'options' => [
				'title' => 'Form Request Order',
				'subject'=>'ro',
				'autoScriptToLang' => true,
			],
			 // call mPDF methods on the fly
			'methods' => [
				'SetHeader'=>['Copyright@KG '.date("r")],
				'SetFooter'=>['{PAGENO}'],
			]
		]);
		/* KIRIM ATTACH emaiL */
		//$to=['piter@lukison.com'];
		//\Yii::$app->kirim_email->pdf($contentMailAttach,'PO',$to,'Purchase-Order',$contentMailAttachBody);
	
		// $pdf = Yii::$app->pdf;
		// $pdf->content = $htmlContent;
		return $pdf->render();
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
