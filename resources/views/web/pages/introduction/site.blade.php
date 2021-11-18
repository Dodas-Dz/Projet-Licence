<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | web service</title>
<link href="{{asset('web/css/webdev.css')}}" rel="stylesheet">	
<link rel="stylesheet" href="{{asset('web/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
<link rel="stylesheet" href="{{asset('web/css/headerfooter.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="icon" href="web/img/logo/Sans nom-2.png">
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
						<h3>Rejoignez la niche du Web en créant </h3>
						<h1> un site Web professionnel pour vous  </h1>
						<a class="color" href="#"> Descover More </a>
						<a  class="color"href="{{route('templateweb')}}">Commencez</a> 

					</div>
					
					
					<div class="img">
						<img src="web/services_img/building_websites.png" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>
		<!-----------------------img et descrip ----------------------------->
		<section class="imgtxt">
			<div class="block1">
			<div class="above"><p class="paragraphhead"> <b>Navigation tres facile</p>
				<h2 class="paragraphdesc">lun des chause les plus importants  </h2>
				
			<div class="container1">
				<div class="img1">
					<img  src="web/services_img/ezsurf.png" alt="image">
				</div>
				
				<div class="paragraph">
					<p class="imgdescrip">notre service vous fournit un site Web facile à naviguer, un site Web clair du début à la fin, un site Web bien structuré qui permet au client de naviguer facilement.
				</div>

			</div>
				
			</div>
		</div>
				<div class="block">
					<div class="above"><p class="paragraphhead"> <b>responsive</b></p>
					<h2 class="paragraphdesc">lun des chause les plus importants  </h2>
				</div>
				<div class="container2">
					<div class="paragraph">
						<p class="imgdescrip">nous nous assurons que votre site Web utilise les tendances et les technologies actuelles. nous ne voulons pas créer un site Web qui ne répond pas aux besoins d’aujourd’hui. Par exemple, la réactivité et la fluidité des conceptions Web sont les principales exigences des sites Web modernes. nous ne souhaitons pas créer de mises en page fixes pour votre site Web qui ne prennent pas en charge la lisibilité mobile.
					</div>

					<div class="img2">

						<img  src="web/services_img/responssive.png" alt="image">
			   		</div>
				</div>
			  
		    	</div>
				<div class="block">
				<div class="above"><p class="paragraphhead"> <b>Sécurise</b></p>
				<h2 class="paragraphdesc">lun des chause les plus importants  </h2>
				</div>
			<div class="container3">
				
				<div class="img3">
						<img  src="web/services_img/security.png" alt="image">
							
				</div>
					
				<div class="paragraph">
					<p class="imgdescrip">La sécurité est une préoccupation majeure pour les visiteurs Web d’aujourd’hui. nous nous assurons que le site Web respecte les normes et les directives de l'industrie. Par exemple, si vous disposez de la fonction d'enregistrement des utilisateurs, nous voulons nous assurer que les mots de passe des utilisateurs sont chiffrés et ne sont pas affichés en texte brut.
				   </div>
	
				</div>

		</section>

		
		<div class="container">
			<div class="vertical-center">
			<a href="{{route('templateweb')}}"><button> Commencez </button></a> 
			</div>
		  </div>
	
		
		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
	<!---------------------------------start_footer-------------------------------->
	@include('layouts.footer')
</body>
</html>