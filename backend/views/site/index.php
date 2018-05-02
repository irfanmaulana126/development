<?php
/* use yii\web\View;
use backend\assets\AppAssetApidoc;
use backend\assets\AppAssetApidocEnd;
AppAssetApidoc::register($this);
AppAssetApidocEnd::register($this);

$this->title = 'My Yii Application';
//$data= $this->render('apidoc/index.html');
//require('/var/www/development/backend/views/site/apidoc/index.html');
$data = $this->render('apidoc/index.html'); */
?>
<div class="site-index">
    <div class="body-content">
		<div class="row">
			<div class="col-md-14">
				<h4 class="page-head-line">README</h4>
			</div>
		</div>
        <div class="row">
			<div class="col-lg-6">
				<div class="alert alert-info">
					Dilarang keras menyebarkan dokomentasi pada web ini, tanpa ada kesepakatan tertentu dari PT. Kogam Artha Sejahtera.
					User dalam dokomentasi ini sudah di tetapkan untuk fitur-fitur development yang sudah di tentukan.
					<br />
					 <strong> Beberapa fitur-fitur yang diberikan di bawah ini :</strong>
					<ul>
						<li>
							Dokomentasi Api Kontrol Gampang.
						</li>
						<li>
							Dokomentasi Api PPOB.
						</li>
						<li>
							Dokomentasi Api Loket.
						</li>
						<li>
							Dokomentasi Virtual Akun.
						</li>
					</ul>
				   
				</div>
				<div class="alert alert-success">
					 <strong> Instruksi Untuk Digunakan:</strong>
					<ul>
						<li>
						   Harus mendaftarkan IP public yang akan dilakukan untuk development. 
						</li>
						<li>
						   Akan mendapatkan User dan password untuk login.
						</li>
						<li>
						   Mendapatkan Token Authorisasi.
						</li>
						<li>
						   Melakukan NDA sebelum menjalankan prosess development.
						</li>
					</ul>
				   
				</div>
				<div class="alert alert-warning">
					 <strong> Instruksi Untuk Open Ticket:</strong>
					<ol>
						<li>
						   Buka Menu Open Ticket Pilih modul yang akan diselsaikan Jika Belum ada Create terlebih dahulu. 
						</li>
						<li>
						   Jika telah menyelsaikan case yang dipilih konfirmasi kepada QA\QC dengan kirim pesan sesuai case yang telah diselasikan.
						</li>
						<li>
						   QA\QC akan mengecek pekerjaan anda dan jika case masih terdapat kekurangan makan QA\QC akan mengirimkan pesan berdasarkan case yang dikerjakan.
						</li>
						<li>
						   Jika case telah selsai maka QA\QC Akan melakukan Close case pekerjaan pun selesai!!!.
						</li>
					</ol>
				   
				</div>
			</div>           
            <div>   
			
			<div class="col-lg-6">
						  <div class="div-square">
			<div class="row">			
              		  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
								<a href="/apidoc/kg" >
									<i class="fa fa-key fa-5x"></i>
									<h4>KG API</h4>
								</a>
						  </div>                    
					  </div> 
					 
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/ppob" >
									<i class="fa fa-envelope-o fa-5x"></i>
									<h4>PPOB</h4>
								</a>
						  </div>                    
					  </div>
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/loket" >
									<i class="fa fa-lightbulb-o fa-5x"></i>
									<h4>Loket</h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/va" >
									<i class="fa fa-money fa-5x"></i>
									<h4>VA</h4>
								</a>
						  </div>
					  </div>
					  </div>
					  </div>
					  <div class="div-square">
					  <div class="row">					  
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/openticket/app-detail-ktg" >
									<i class="fa fa-rocket fa-5x"></i>
									<h4>Open Ticket</h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/admin/user-development" >
									<?php if($notifuser>0){?>							   
										<span class="label label-success" style="float:right"><?=$notifuser?></span>
									<?php } ?>							   
									<i class="fa fa-user fa-5x"></i>
									<h4>User </h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/qualitycontrol/open-ticket" >
									<?php if($notifqa>0){?>	
										<span class="label label-success" style="float:right"><?=$notifqa?></span>
									<?php } ?>
									<i class="fa fa-bug fa-5x"></i>
									<h4>QA / QC</h4>
								</a>
						  </div>
					  </div>
					  </div>
					  </div>					  
					  <div class="row">
					  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="blank.html" >
									<i class="fa fa-comments-o fa-5x"></i>
									<h4>Support</h4>
								</a>
						  </div>
					  </div>
					  </div>
			</div>
        </div>

    </div>
</div>
</div>