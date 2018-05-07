<?php

namespace backend\qualitycontrol\controllers;

use Yii;
use backend\qualitycontrol\models\FeedbackQa;
use backend\qualitycontrol\models\FeedbackQaSearch;
use backend\qualitycontrol\models\OpenTicket;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kartik\mpdf\Pdf;
/**
 * FeedbackQaController implements the CRUD actions for FeedbackQa model.
 */
class FeedbackQaController extends Controller
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
     * Lists all FeedbackQa models.
     * @return mixed
     */
    public function actionIndex()
    {
        
        $paramCari=Yii::$app->getRequest()->getQueryParam('id');
        if (!empty($paramCari)) {
            $searchModel = new FeedbackQaSearch(['ID_OPEN_TIKET'=>$paramCari]);
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $dataProviderJobdesk = OpenTicket::findOne(['ID'=>$paramCari]);
            $dataProviderJobdesk->STATUS_QA=2;
            $dataProviderJobdesk->save(false);
            return $this->render('index', [
                'searchModel' => $searchModel,
                'dataProvider' => $dataProvider,
                'dataProviderJobdesk' => $dataProviderJobdesk,
            ]);
        } else {
            return $this->redirect(['/qualitycontrol/open-ticket']);
        }
        
       
    }

    /**
     * Displays a single FeedbackQa model.
     * @param string $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new FeedbackQa model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new FeedbackQa();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->ID]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing FeedbackQa model.
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
     * Deletes an existing FeedbackQa model.
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
    public function actionKomen($id)
    {
        $data = OpenTicket::findOne($id);
        $model = new FeedbackQa;
        $user = (empty(Yii::$app->user->identity->id)) ? '' : Yii::$app->user->identity->id;
        if ($model->load(Yii::$app->request->post())) {
            $model->ID_USER=$user;
            $model->ID_OPEN_TIKET=$id;
            $model->save(false);
            $data->STATUS=1;
            $data->STATUS_QA=4;
            $data->save(false);
            return $this->redirect(['/qualitycontrol/feedback-qa?id='.$id.'']);
        }

        return $this->renderAjax('_form_komen', [
            'model' => $model,
        ]);
    }
    public function actionClose($id)
    {
        $data = OpenTicket::findOne($id);
        $data->STATUS=2;
        $data->save(false);
        return $this->redirect(['index']);
        
    }
    /**
     * Finds the FeedbackQa model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param string $id
     * @return FeedbackQa the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionPdf($id)
    {
		$searchModel = new FeedbackQaSearch(['ID_OPEN_TIKET'=>$id]);
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            $dataProviderJobdesk = OpenTicket::findOne(['ID'=>$id]);
		$content= $this->renderPartial( 'print_pdf', [            
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'dataProviderJobdesk' => $dataProviderJobdesk,
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
    protected function findModel($id)
    {
        if (($model = FeedbackQa::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
