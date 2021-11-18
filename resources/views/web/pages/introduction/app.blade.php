<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | App Service</title>
<link href="{{asset('app/css/webdev.css')}}" rel="stylesheet">	
<link rel="stylesheet" href="{{asset('app/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
<link rel="stylesheet" href="{{asset('app/css/headerfooter.css')}}">
<link rel="icon" href="app/img/logo/Sans nom-2.png">
</head>

<body>
	<!--------------------------------start_header------------------------------->
	@include('layouts.header')


	<!---------------------------------end_header-------------------------------->
	
	
	<!--------------------------------start_main------------------------------->
	<main> 
		<!----------------start_home_section----------------------->
		<section class="home">
			<div class="container">
				<div class="home_section">
				
					<div class="home_content">
						<h3> ALLER CHERCHER VOTRE CLIENTÈLE SUR INTERNET ! </h3>
						<h1> Boostez votre notoriété et <br>votre chiffre d’affaires.<br>Devenez une star locale !  </h1>
						<a class="color" href="#"> Descover More </a>
						<a href="#"> Our Service </a>
					</div>
					
					
					<div class="img">
						<img src="app/services_img/undraw_work_together_h63l.svg" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>
		<!-----------------------img et descrip ----------------------------->
		<section class="imgtxt">
			<div class="block1">
			<div class="above"><p class="paragraphhead"> <b>
				Mises à jour régulières</p>
				<h2 class="paragraphdesc">lun des chause les plus importants  </h2>
				
			<div class="container1">
				<div class="img1">
					<img  src="app/services_img/undraw_os_upgrade_nj2m.svg" alt="image">
				</div>
				
				<div class="paragraph">
					<p class="imgdescrip">notre service vous fournit un site Web facile à naviguer, un site Web clair du début à la fin, un site Web bien structuré qui permet au client de naviguer facilement.
				</div>

			</div>
				
			</div>
		</div>
				<div class="block">
					<div class="above"><p class="paragraphhead"> <b>Performance</b></p>
					<h2 class="paragraphdesc">lun des chause les plus importants  </h2>
				</div>
				<div class="container2">
					<div class="paragraph">
						<p class="imgdescrip">nous nous assurons que votre site Web utilise les tendances et les technologies actuelles. nous ne voulons pas créer un site Web qui ne répond pas aux besoins d’aujourd’hui. Par exemple, la réactivité et la fluidité des conceptions Web sont les principales exigences des sites Web modernes. nous ne souhaitons pas créer de mises en page fixes pour votre site Web qui ne prennent pas en charge la lisibilité mobile.
					</div>

					<div class="img2">

						<img  src="app/services_img/undraw_speed_test_wxl0.svg" alt="image">
			   		</div>
				</div>
			  
		    	</div>
		

		</section>

		<div class="container">
			<div class="vertical-center">
				
				<a href="{{route('templateapp')}}"><button> Commencez </button></a> 
			</div>
		  </div>
	
		
		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
	<!---------------------------------start_footer-------------------------------->
	@include('layouts.footer')

</body>
</html>
