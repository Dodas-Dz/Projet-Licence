<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Zyrah | design</title>
	
	<link href="{{asset('design/css/template.css')}}" rel="stylesheet">	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="{{asset('design/css/all.min.css')}}">	
	<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
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
						Les couleurs sont partout, et sans le savoir de mani??re consciente, chaque couleur provoque en
						 vous une exp??rience ??motionnelle. Le vert et le bleu ??voquent le calme; le jaune 
						met vos sens en ??veil (et vous donne faim!).<br> 
						 
						La compr??hension de la psychologie des couleurs est essentielle pour nous les designers.
						 Choisir les bonnes couleurs pour votre marque aidera votre audience ?? comprendre qui vous ??tes,
						  ce que vous faites et o?? vous souhaitez aller.

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
						<p class="imgdescrip"> le logo est tr??s bien pour commencer un business ou une entreprise
							Il donnera tout de suite l???impression ?? vos visiteurs que votre entreprise est ??tablie et s??rieuse.
							 Et cela donnera aussi le ton pour les couleurs et les polices que utilis??.<br>

							 Un professionnel pourra concevera pour vous quelque chose de tr??s cr??atif et de qualit?? afin que vous
							  puissiez l???utiliser dans diff??rents contextes, 
							pas uniquement sur votre site web. N???h??sitez pas ?? contacter 
							expert dans la cr??ation de logo.
						</p>
					</div>

					<div class="img2">

						<img  src="design/img/design images/undraw_Logo_design_re_gfu6.svg" alt="image">
			   		</div>
				</div>
			  
		    	</div>


				<div class="block">
				<div class="above"><p class="paragraphhead"> <b>Publicit??</b></p>
				
				</div>
			<div class="container3">
				
				<div class="img3">
						<img  src="design/img/design images/undraw_publish_post_vowb.svg" alt="image" width="80%">
							
				</div>
					
				<div class="paragraph">
					<p class="imgdescrip">Cr??er une affiche esth??tiquement r??ussie, c???est une bonne chose
						Il est donc n??cessaire de bien ??tudier les go??ts du public auquel 
						s???adresse le visuel avant de commencer les premi??res ??bauches de cr??ation.<br>
						Pour une bonne hi??rachie faut se poser les bonnes questions <br>
						Quel est le but de l???affiche publicitaire ?
						En parall??le, il est important de hi??rarchiser l???information sur l???affiche en elle-m??me, 
						en mettant en valeur ce qui est vraiment important, 
						mais aussi en ??vitant la surcharge d???info qui ne ferait que rebuter les spectateurs.


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
