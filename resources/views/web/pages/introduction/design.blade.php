<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zyrah | design</title>
	
	<link href="{{asset('design/css/template.css')}}" rel="stylesheet">	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="{{asset('design/css/all.min.css')}}">	
	<link rel="stylesheet" href="{{asset('accueil/css/headerfooter.css')}}">
	<link rel="stylesheet" href="{{asset('design/css/btn.css')}}">
	<link rel="icon" href="img/logo/Sans nom-2.png">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/>
	
	<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
	<link href="{{asset('design/css/webdev.css')}}" rel="stylesheet">	
<link href="{{asset('design/css/headerfooter.css')}}" rel="stylesheet">	
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
						
						<h1> Un design professionnel <br>
						est obligatoire pour votre <br>
					    entreprise  ou business </h1>
						<a class="color" href="#"> Connectez-vous </a>
						
					</div>
					
					
					<div class="img">
						<img src="design/img/design images//undraw_Designer_mindset_re_2w1k.svg" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>
		<!-----------------------img et descrip ----------------------------->
		<section class="imgtxt">
			<div class="block1">
			<div class="above"><p class="paragraphhead"> <b>Couleur</p>
				
				
			<div class="container1">
				<div class="img1">
					<img  src="design/img/design images/undraw_color_palette_yamk.svg" alt="image">
				</div>
				
				<div class="paragraph">
					<p class="imgdescrip">Comment les couleurs fonctionnent-elles?<br>
						Les couleurs sont partout, et sans le savoir de manière consciente, chaque couleur provoque en
						 vous une expérience émotionnelle. Le vert et le bleu évoquent le calme; le jaune 
						met vos sens en éveil (et vous donne faim!).<br> 
						 
						La compréhension de la psychologie des couleurs est essentielle pour nous les designers.
						 Choisir les bonnes couleurs pour votre marque aidera votre audience à comprendre qui vous êtes,
						  ce que vous faites et où vous souhaitez aller.

					</p>
				</div>

			</div>
				
			</div>
		</div>
				<div class="block">
					<div class="above"><p class="paragraphhead"> <b>Logo</b></p>
					
				</div>
				<div class="container2">
					<div class="paragraph">
						<p class="imgdescrip"> le logo est très bien pour commencer un business ou une entreprise
							Il donnera tout de suite l’impression à vos visiteurs que votre entreprise est établie et sérieuse.
							 Et cela donnera aussi le ton pour les couleurs et les polices que utilisé.<br>

							 Un professionnel pourra concevera pour vous quelque chose de très créatif et de qualité afin que vous
							  puissiez l’utiliser dans différents contextes, 
							pas uniquement sur votre site web. N’hésitez pas à contacter 
							expert dans la création de logo.
						</p>
					</div>

					<div class="img2">

						<img  src="design/img/design images/undraw_Logo_design_re_gfu6.svg" alt="image">
			   		</div>
				</div>
			  
		    	</div>


				<div class="block">
				<div class="above"><p class="paragraphhead"> <b>Publicité</b></p>
				
				</div>
			<div class="container3">
				
				<div class="img3">
						<img  src="design/img/design images/undraw_publish_post_vowb.svg" alt="image" width="80%">
							
				</div>
					
				<div class="paragraph">
					<p class="imgdescrip">Créer une affiche esthétiquement réussie, c’est une bonne chose
						Il est donc nécessaire de bien étudier les goûts du public auquel 
						s’adresse le visuel avant de commencer les premières ébauches de création.<br>
						Pour une bonne hiérachie faut se poser les bonnes questions <br>
						Quel est le but de l’affiche publicitaire ?
						En parallèle, il est important de hiérarchiser l’information sur l’affiche en elle-même, 
						en mettant en valeur ce qui est vraiment important, 
						mais aussi en évitant la surcharge d’info qui ne ferait que rebuter les spectateurs.


					</p>
				   </div>
	
				</div>

		</section>

		<div class="container">
			<div class="vertical-center">
			<a href="{{route('templatdesign')}}"><button> Commencez </button></a> 
			</div>
		  </div>
	
		
		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
	<!---------------------------------start_footer-------------------------------->
<!---------------------------------start_footer-------------------------------->
@include('layouts.footer')

</body>
</html>
