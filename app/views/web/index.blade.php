@extends('layouts.web_master')

@section('content')


<div class="row-fluid">
	<div id="social">
		<ul>
			<li><a class="fb" href="" target="_blank"></a></li>
			<li><a class="tw" href="" target="_blank"></a></li>
			<li><a class="yt" href="" target="_blank"></a></li>
			<li><a class="in" href="" target="_blank"></a></li>
		</ul>
	</div><!--SOCIAL-->
	<div class="col-xs-12 col-md-12 col-lg-12">
	    <div class="row-fluid">
		    <div class="col-xs-12 col-md-6 col-lg-6">
				<section id="miSlider" class="carousel slide" data-ride="carousel">
					<!--ol class="carousel-indicators">
						<li data-target="#miSlider" data-slide-to="0" class="active"></li>
						<li data-target="#miSlider" data-slide-to="1"></li>
						<li data-target="#miSlider" data-slide-to="2"></li>
					</ol-->	
					<div class="carousel-inner">
						<div class="item active">
							<img src="img/img1.jpg" class="adaptar responsive">
							<div class="carousel-caption">
				    			<h3>Titulo 1</h3>
				    			<p>Descripción 1</p>
			  				</div>
						</div>
						<div class="item">
							<img src="img/img2.jpg" class="adaptar responsive">
							<div class="carousel-caption">
					    		<h3>Titulo 2</h3>
					    		<p>Descripción 2</p>
					  		</div>
						</div>
						<div class="item">
							<img src="img/img3.jpg" class="adaptar responsive">
							<div class="carousel-caption">
					    		<h3>Titulo 3</h3>
					    		<p>Descripción 3</p>
					  		</div>
						</div>
					</div>		
					<!-- Controls -->
					<a class="left carousel-control" href="#miSlider" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#miSlider" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>	
				</section><!--carousel slide-->
				<hr>
				<section class="row">
					<a href="#" class="col-xs-6 col-md-6 col-lg-6">
						<div class="square table">
							<h2 id="abre">NRS</h2>
							<h5>NUESTRA RESPONSABILIDAD SOCIAL</h5>
						</div>
					</a>
					<a href="#" class="col-xs-6 col-md-6 col-lg-6">
						<div class="square table">
							<h2 id="abre">RME</h2>
							<h5>RED MUNDIAL DE EMPRENDEDORES</h5>
						</div>
					</a>		
				</section>
			</div> <!--col-xs-12 col-md-6-->
			<!--====================RIGHT==============================-->
			<div id="right" class="col-xs-12 col-md-6">
				<section class="row">
					<a href="#" class="col-xs-12 col-md-6">
						<div class="colum table">
							<h2 id="abre">PME</h2>
							<h5>PERÚ MILLON DE EMPRENDEDORES</h5>
						</div>
					</a>
					<div class="col-xs-12 col-md-6 squares">
						<section class="row">
							<a href="#" class="col-xs-6 col-md">
								<div class="square-min ">
									<div class="stm"></div>
								</div>
							</a>
							<a href="#" class="col-xs-6 col-md">
								<div class="square-min">
									<div class="e7"></div>
								</div>
							</a>		
						</section>
						<p class="comit">&nbsp;</p>
						<center><h4>Siguenos en Facebook</h4></center>
						<div class="comit" style="text-align:center; border:1px solid #E6E6E6; border-radius:5px;"><!--Facebook-->
							
							<div class="fb-like-box" data-href="https://www.facebook.com/gwb.pe?ref=ts&fref=ts" data-width="180" data-height="180" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>
						</div><!--/Facebook-->
						<br>
						<div class="comit" style="text-align:center;"><!--Twitter-->
							<center><h4>Siguenos en Twitter</h4></center>
							<!--a class="twitter-timeline"  href="https://twitter.com/RoySuclupe"  data-widget-id="452850636078338048">Tweets por @RoySuclupe</a>
	    					<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
							</div--><!--/Twitter-->						
					</div>		
				</section>
			</div> <!--col-xs-12 col-md-6-->
<!--========================================================-->
			<!--Abajo-->
<!--====================LEFT==============================-->

			<div class="">
				<div id="abajo" class="col-xs-12 col-md-6">
					<section class="row">
						<a href="#" class="col-xs-6 col-md">
							<div class="square table">
								<h2>COMPLEJO EDUCATIVO LUCANAS</h2>
							</div>
						</a>

						<a href="#" class="col-xs-6 col-md">
							<div class="square table">
								<h2>BLUE HOUSE</h2>
							</div>
						</a>		
					</section>
				</div> <!--col-xs-12 col-md-6-->
<!--========================================================-->
<!--====================RIGHT==============================-->
				<div id="abajo" class="col-xs-12 col-md-6">
					<section class="row">
						<a href="#" class="col-xs-12 col-md-12">
							<div class="square table">
								<h2>INNOVACION PARA EL CAMBIO</h2>
							</div>
						</a>
					</section>
				</div> <!--col-xs-12 col-md-6-->
<!--========================================================-->			
  			</div>
    	</div>
  	</div>
</div>
<p>&nbsp;</p>
@stop