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
			<div class="col-md-12">
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
			</div>           
            <div>   
              		  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
						  <div class="div-square">
								<a href="/apidoc/kg" >
									<i class="fa fa-key fa-5x"></i>
									<h4>KG API</h4>
								</a>
						  </div>                    
					  </div> 
					 
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/ppob" >
									<i class="fa fa-envelope-o fa-5x"></i>
									<h4>PPOB</h4>
								</a>
						  </div>                    
					  </div>
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/loket" >
									<i class="fa fa-lightbulb-o fa-5x"></i>
									<h4>Loket</h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="/apidoc/va" >
									<i class="fa fa-money fa-5x"></i>
									<h4>VA</h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
						  <div class="div-square">
							   <a href="blank.html" >
									<i class="fa fa-user fa-5x"></i>
									<h4>Admin </h4>
								</a>
						  </div>
					  </div>
					  <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 text-center pad-top">
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
