<?php

namespace backend\admin\controllers;

use Yii;
use backend\admin\models\UserDevelopment;
use backend\admin\models\UserDevelopmentSearch;
use backend\admin\models\AppDetailKtg;
use backend\admin\models\AppDetailKtgSearch;
use backend\admin\models\OpenTicket;
use backend\admin\models\OpenTicketSearch;
use backend\admin\models\FeedbackQa;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;

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
        $searchModeljobdesk = new OpenTicketSearch(['KODE_USER'=>Yii::$app->user->identity->id]);
        $dataProviderjobdesk = $searchModeljobdesk->search(Yii::$app->request->queryParams);
        $searchModelpesan = new OpenTicketSearch(['KODE_USER'=>Yii::$app->user->identity->id]);
        $dataProviderpesan = $searchModelpesan->searchPesan(Yii::$app->request->queryParams);        
        $notifuser = OpenTicket::find()->where(['KODE_USER'=>Yii::$app->user->identity->id,'STATUS_QA'=>[4,2],'STATUS'=>[0,1]])->count();
        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'notifuser' => $notifuser,
            'dataProviderjobdesk' => $dataProviderjobdesk,
            'searchModeljobdesk' => $searchModeljobdesk,
            'dataProviderpesan' => $dataProviderpesan,
            'searchModelpesan' => $searchModelpesan,
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

    public function actionViewModul($id)
    {
        $model = OpenTicketSearch::findOne($id);
        return $this->renderAjax('view_modul', [
            'model' => $model,
        ]);
    }
    public function actionPdf($id)
    {
        $model = OpenTicketSearch::findOne($id);		
		$content= $this->renderPartial( 'view_modul', [
            'model' => $model,
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
    public function actionSendQa($id)
    {
        $data = OpenTicketSearch::findOne($id);
        $model = new FeedbackQa;
        $user = (empty(Yii::$app->user->identity->id)) ? '' : Yii::$app->user->identity->id;
        if ($model->load(Yii::$app->request->post())) {
            $model->ID_USER=$user;
            $model->ID_OPEN_TIKET=$id;
            $model->save(false);
            $data->STATUS_QA=1;
            $data->save(false);
            return $this->redirect(['index']);
        }

        return $this->renderAjax('_form_send_qa', [
            'model' => $model,
        ]);
    }
    /**
     * Function Change Password 
     */
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
