<?php

class PenjualanController extends Controller
{
/**
* @var string the default layout for the views. Defaults to '//layouts/column2', meaning
* using two-column layout. See 'protected/views/layouts/column2.php'.
*/
public $layout='//layouts/column2';

/**
* @return array action filters
*/

 public function filters()
{
return array(
'accessControl', // perform access control for CRUD operations
);
}

/**
* Specifies the access control rules.
* This method is used by the 'accessControl' filter.
* @return array access control rules
*/
public function accessRules()
{
return array(
array('allow',  // allow all users to perform 'index' and 'view' actions
'actions'=>array('index','view','editongkir','editverifikasi','verifikasi','pengiriman','editpengiriman','pembayaran','editpembayaran','editmetodebayar','cetakpenjualan','instruksikhusus'),
'users'=>array('*'),
),
array('allow', // allow authenticated user to perform 'create' and 'update' actions
'actions'=>array('create','update'),
'users'=>array('@'),
),
array('allow', // allow admin user to perform 'admin' and 'delete' actions
'actions'=>array('admin','delete'),
'users'=>array('admin'),
),
array('deny',  // deny all users
'users'=>array('*'),
),
);
}

/**
* Displays a particular model.
* @param integer $id the ID of the model to be displayed
*/
public function actionView($id)
{
$cariDetail=new DetailPenjualan('caridet');
$cariDetail->unSetAttributes();
//$dtbeli=  DetailPembelian::model()->findBySql("select * from detail_pembelian where id_pembelian='$id'");
$dtbeli=new DetailPenjualan('caridet');
$this->render('view',array(
'model'=>$this->loadModel($id),'cariDetail'=>$cariDetail,
));
}

/**
* Creates a new model.
* If creation is successful, the browser will be redirected to the 'view' page.
*/
public function actionCreate()
{
$model=new Penjualan;
$jual=new DetailPenjualan;
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);
//$role=Yii::app()->user->getRoleName();
$namax=Yii::app()->user->name;
$pengguna=  User::model()->findBySql("select id,nama from user where username='$namax'");
$idx=$pengguna->id;
$customerservice=Customerservice::model()->findBySql("select * from customerservice where user_id='$idx'");
if(isset($_POST['Penjualan']))
{
	$model->attributes=$_POST['Penjualan'];
	$model->tanggal=$_POST['Penjualan']['tanggal'];	
	$model->kode_trans='ZH'.time();
	$kode=  Kodeunik::model()->findBySql("select kode_unik,id from kodeunik WHERE `status`!=1 ORDER BY id ASC LIMIT 1");
    $model->id_pembeli=$_POST['Penjualan']['id_pembeli'];
    $model->id_ekspedisi=$_POST['Penjualan']['id_ekspedisi'];
    $cekprop=Pembeli::model()->findBySql("select id_propinsi from pembeli where id='$model->id_pembeli'");
    if(!empty($cekprop)){
        $prop=$cekprop['id_propinsi'];
        $ceklama=WktSampai::model()->findBySql("select lama from wkt_sampai where id_propinsi='$prop' AND id_ekspedisi='$model->id_ekspedisi'");
        $lama=$ceklama['lama'];
        echo $lama;
        $tanggalan=$_POST['Penjualan']['tanggal'];
        $mtglsampai=strtotime ( '+'.$lama.' day' , strtotime ($tanggalan) ) ;
        $mtglsampai = date('Y-m-j', $mtglsampai);
        $model->tglsampai=$mtglsampai;
    }	
	$model->kode_unik=$kode->kode_unik;
	$update=Kodeunik::model()->updateByPk($kode->id,array('status'=>'1'));
	$model->id_customerservice=$customerservice->id;
	if($model->save()){
	$jual->id_penjualan=$model->id;	
	$jual->id_barang=$_POST['DetailPenjualan']['id_barang'];
	$jual->harga=str_replace(",","",$_POST['DetailPenjualan']['harga']);
	$jual->jumlah=$_POST['DetailPenjualan']['jumlah'];
	$jual->total=$jual->harga*$jual->jumlah;
	$jual->save();
	$this->redirect(array('update','id'=>$model->id));
	}
}
$this->render('create',array(
'model'=>$model,'jual'=>$jual
));
}

/**
* Updates a particular model.
* If update is successful, the browser will be redirected to the 'view' page.
* @param integer $id the ID of the model to be updated
*/
public function actionUpdate($id)
{
$model=$this->loadModel($id);
$detail=$this->loadJual($id);
$cariDetail=new DetailPenjualan('caridet');
$cariDetail->unSetAttributes();
$jual=new DetailPenjualan('caridet');
// Uncomment the following line if AJAX validation is needed
// $this->performAjaxValidation($model);

if(isset($_POST['Penjualan']))
{
$model->attributes=$_POST['Penjualan'];
$model->updated_date=date('Y-m-d h:i:s');
	if(isset($_POST['Penjualan']['ongkir'])&&($_POST['Penjualan']['ongkir']!=0)){
	$model->ongkir=str_replace(",","",$_POST['Penjualan']['ongkir']);
	}
	if($model->save()){
	$jual=new DetailPenjualan();
	$jual->id_penjualan=$model->id;
	$jual->id_barang=$_POST['DetailPenjualan']['id_barang'];
	$jual->harga=str_replace(",","",$_POST['DetailPenjualan']['harga']);
	$jual->jumlah=$_POST['DetailPenjualan']['jumlah'];
	$jual->total=$jual->harga*$jual->jumlah;	
	$jual->save();
	$this->redirect(array('update','id'=>$model->id));
	}
}

$this->render('update',array(
'model'=>$model,'jual'=>$jual,'detail'=>$detail,'cariDetail'=>$cariDetail
));
}

/**
* Deletes a particular model.
* If deletion is successful, the browser will be redirected to the 'admin' page.
* @param integer $id the ID of the model to be deleted
*/
public function actionDelete($id)
{
if(Yii::app()->request->isPostRequest)
{
// we only allow deletion via POST request

$this->loadModel($id)->delete();
// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
if(!isset($_GET['ajax']))
$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
}
else
throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
}

/**
* Lists all models.
*/
public function actionIndex()
{
$dataProvider=new CActiveDataProvider('Penjualan');
$this->render('index',array(
'dataProvider'=>$dataProvider,
));
}

/**
* Manages all models.
*/
public function actionAdmin()
{
$model=new Penjualan('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Penjualan']))
$model->attributes=$_GET['Penjualan'];

$this->render('admin',array(
'model'=>$model,
));
}
public function actionEditongkir()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);
        
        if (Yii::app()->request->isPostRequest) {
                $model->ongkir = $_POST['value'];
                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               
        }
}
public function actionInstruksikhusus()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);
        
        if (Yii::app()->request->isPostRequest) {
                $model->instruksi_khusus = $_POST['value'];
                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               
        }
}
public function actionEditmetodebayar()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);
        
        if (Yii::app()->request->isPostRequest) {
                $model->id_metodebayar = $_POST['value'];
                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               
        }
}
public function actionVerifikasi()
{
$model=new Penjualan('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Penjualan']))
$model->attributes=$_GET['Penjualan'];

$this->render('verifikasi',array(
'model'=>$model,
));
}

public function actionEditverifikasi()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);
        
        if (Yii::app()->request->isPostRequest) {
                $model->verifikasi = $_POST['value'];
                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               
        }
}
public function actionPengiriman()
{
$model=new Penjualan('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Penjualan']))
$model->attributes=$_GET['Penjualan'];

$this->render('pengiriman',array(
'model'=>$model,
));
}

public function actionEditpengiriman()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);
        
        if (Yii::app()->request->isPostRequest) {
                $model->statuskirim = $_POST['value'];
                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               
        }
}
public function actionPembayaran()
{
$model=new Penjualan('search');
$model->unsetAttributes();  // clear any default values
if(isset($_GET['Penjualan']))
$model->attributes=$_GET['Penjualan'];

$this->render('pembayaran',array(
'model'=>$model,
));
}

public function actionEditpembayaran()
{
    $id = (int) $_POST['pk'];
        $model = $this->loadModel($id);        
        
        if (Yii::app()->request->isPostRequest) {
                $model->statusbayar = $_POST['value'];
                $kodeunik=$model->kode_unik;
                $free=Kodeunik::model()->findByAttributes(array('kode_unik'=>$kodeunik));
                if($model->statusbayar=='batal'||$model->statusbayar=='lunas'){
                $free->status=0;
            	}

                //$model->user_update=Yii::app()->user->getId();
                $model->save();
               $free->save();
        }
}


public function actionCetakpenjualan($id){
    $this->layout=FALSE;
        $model=  $this->loadModel($id);
        $model2=$this->loadJual($id);
        # mPDF
        $mPDF1 = Yii::app()->ePdf->mpdf(); 
        
        # You can easily override default constructor's params
        $mPDF1 = Yii::app()->ePdf->mpdf('', 'A4-L'); 
       
        # render (full page)
        $mPDF1->WriteHTML($this->render('cetakpenjualan', array('model'=>$model,'model2'=>$model2), true));
        # Load a stylesheet
        /*
        $stylesheet = file_get_contents(Yii::getPathOfAlias('webroot.css') . '/main.css');
        $mPDF1->WriteHTML($stylesheet, 1); 
        # renderPartial (only 'view' of current controller)
        $mPDF1->WriteHTML($this->renderPartial('cetaksurat', array(), true)); 
        # Renders image
        $mPDF1->WriteHTML(CHtml::image(Yii::getPathOfAlias('webroot.css') . '/bg.gif' )); 
         * 
         */
        # Outputs ready PDF
        $mPDF1->Output();
    //$this->render('cetaksurat');
}
/**
* Returns the data model based on the primary key given in the GET variable.
* If the data model is not found, an HTTP exception will be raised.
* @param integer the ID of the model to be loaded
*/
public function loadModel($id)
{
$model=Penjualan::model()->findByPk($id);
if($model===null)
throw new CHttpException(404,'The requested page does not exist.');
return $model;
}
public function loadJual($id)
{
$jual=  DetailPenjualan::model()->findAllBySql("select * from detail_penjualan where id_penjualan='$id'");
if($jual===null)
throw new CHttpException(404,'The requested page does not exist.');
return $jual;
}
public function loadKodeunik($kode){
$kodeunik=  Kodeunik::model()->findAllBySql("select status from kodeunik where kode_unik='$kodeunik'");
if($jual===null)
throw new CHttpException(404,'The requested page does not exist.');
return $kodeunik;
}
/**
* Performs the AJAX validation.
* @param CModel the model to be validated
*/
protected function performAjaxValidation($model)
{
if(isset($_POST['ajax']) && $_POST['ajax']==='penjualan-form')
{
echo CActiveForm::validate($model);
Yii::app()->end();
}
}
}
