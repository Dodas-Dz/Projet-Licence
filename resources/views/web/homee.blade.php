<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Acceuil</title>
<link href="{{asset('accueil/css/css.css')}}" rel="stylesheet">	

<link rel="icon" type="image/png" href="accueil/img/logo/Sans nom-2.png" >
<link rel="stylesheet" href="{{asset('accueil/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('accueil/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('accueil/css/headerfooter.css')}}">
</head>

<body>
	<!--------------------------------start_header------------------------------->
	<header>
		<div class="container">
			<div class="head">
				<div class="logo"> 
			<img src="web/img/logo/zyrah.png" alt="logo">
		</div>
		
		
		<nav  class="primary-navigation">
			<ul >
				  <li><a href="{{route('home')}}">Acceuil</a></li>
				  <li><a href="#">Services &dtrif;</a>
						<ul class="dropdown">
						    <li><a href="{{route('serviceweb')}}" >Site-web</a></li>
						    <li><a href="{{route('serviceweb')}}">App-Mobile</a></li>
						    <li><a href="C:\Users\Zerktea\Desktop\miniprojetdesign\design.html">Design</a></li>
                          
					    </ul>	
					</li>
					
					<li><a href="{{route('commandeuser')}}">commande</a></li>
				
					<li><a href="#">commande admin</a></li>
					<li><a href="{{route('apropos')}}">A propos</a></li>
					@guest
				@if (Route::has('login') or Route::has('register'))
                             
							 <li class="get_btn"> <a  href="{{ route('login') }}">{{ __('Log/Reg') }}</a></li>
								
				@endif
				@else<li ><a href="#"> Account </a>
					<ul class="dropdown">
								<li > <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a></li>
						
					
						<li  >  <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                </li>

                                 <li > <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>   
							
						</li>   
					</ul>
				
				</li>
		
				
	</li>
            
                           @endguest
		
			</ul>
	   </nav>
<!--				<li><a href="#"> <i class="fas fa-chevron-down"></i></a></li>-->
				
<!--				<li><a href="#">  <i class="fas fa-chevron-down"></i> </a></li>-->
				
			
		</div>
			
			</div>
		
		
		
		
		</div>
		
	
	</header>




	<!---------------------------------end_header-------------------------------->
	
	
	<!--------------------------------start_main------------------------------->
	<main> 
		<!----------------start_home_section----------------------->
		
			 <!--------------------------start home --------------------------->
  <!--<section class="home">-->
    <div class="container1">
      <div class="home-section">
        
        <!-- Slideshow container -->
 <div class="vid">
	<h2>Voir le Guide rapide </h2>
		  <video  controls autoplay="true">
			
      <source src="accueil/video/acceuil.mp4" type="video/mp4">
    </video>
</div>
		   <div class="af" >

			<h1>Créer votre <br> entreprise en ligne</h1>
			<p>en quelque étapes seulement vous avez le choix de créer un site web,
				 une application mobile ou même un design professionnel c'est à vous de choisir !  </p>
			<input type="button" value="Commencez" />
		</div>

		</div>
		</div>
		
		<!----------------start_about_section---------------------->
		<section class="about">
			<div class="container">
				<div class="title">
					<h3>Caractéristiques</h3>
					<h2>Ce que nous <span> faisons</span></h2>
				</div>
				<div class="about_section">
					<div class="about_content animation1">
						<i class="fas fa-laptop-code fa-2x items"></i>
						<img src="accueil/img/svg/undraw_static_website_0107.svg" >
						<h2> Site web </h2>
						<h4>Site web</h4>
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>

						<p >Développement des<span> Site web</span> est faite sur plusieurs étapes , réservation et gestion d'un nom de domaine,
							 la mise en œuvre d'une infrastructure d'hébergement du site
							l'interface utilisateur (frontend), la partie visible dans le navigateur dans 
							les différentes pages sont décrites en langages connus des navigateurs web, principalement HTML, CSS et JavaScript.
							et enfin le développement de l'arrière plan (backend), la partie qui fonctionne côté serveur   
						</p>
					</div>
					
					<div class="about_content animation1">
						<i class="far fa-object-group fa-2x items"></i>
						<img src="accueil/img/svg/undraw_design_tools_42tf.svg">
						<h2>Design</h2>
						<h4>Design</h4>
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>

						<p>Création des <span>Design professionnel</span> consiste à répondre au besoin et l'imagination du client selon 
							son produit si il s'agit d'un produit alimentaire , pharmacetique, mode, artistique ... 
							ou bien un logo pour une entreprise, un magasin, un restaurent...
							ou également les affiches publicitaires, flayers et tout ce qui concernent le marketing digital

						</p>
					</div>
					
					<div class="about_content animation1">
						<i class="fas fa-mobile-alt fa-2x items"></i>
						<img src="accueil/img/svg/undraw_mobile_development_8gyo.svg" >
						<h2>Application mobile</h2>
						<h4>Application mobile</h4>
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>

						<p>Développement des <span>Applications mobile</span> , Une application doit répondre 
							à un besoin et se voir assigner des objectifs précis
						   l'interface utilisateur , la partie visible sur téléphone 
						   les différentes pages sont décrites en langages connus Java, visual studio, flutter
						    le développement de l'arrière plan, la partie qui fonctionne côté serveur 
							enfin la mise en œuvre d'une infrastructure de certification par les plateforme de téléchargement  </p>
					</div>
				</div>
			</div>
		</section>
		
		<!----------------start_service_section-------------------->
		
		<!----------------start_about_us_section------------------->
		<section class="about_us">
			<div class="about_us_content after">
				<img src="accueil/img/svg/undraw_community_8nwl.svg" alt="img">
			</div>
			<div class="about_us_content">
				<h1>A propos de nous</h1>
				<h2>Créer votre entreprise dans le monde du Web app mobile</h2>
				
				<p>Grâce à notre plateforme, vous pouvez commandez un site professionnel et performant en toute simplicité,
					 puis le publier en ligne en un clic.  vous trouverez toutes les fonctionnalités et 
					 solutions dont vous avez besoin pour créer un site web professionnel. Libérez vos idées !

					 vous pouvez également commandez une application mobile android IOS performante et simple et
					  la partager sur play store ou app store en toute simplicité
					 
					 et bien évidemment vous pouvez commandez un design professionnel pour vote buisness .
</p>
				<a href="#"> Plus de détails</a>
			</div>
		</section>
	
			
		
		<!----------------start_Contact_section-------------------->
		<section class="contact">
			<div class="container">
    <div class="content">
      <div class="image-box">
       <img src="accueil/img/svg/undraw_message_sent_1030.svg" alt=""></div>

    <form action="/action_page.php" >
      <div class="topic">Envoyer un message</div>
      <div class="input-box">
        <input type="text" required>
        <label>Entrer votre nom</label>
      </div>
      <div class="input-box">
        <input type="text" required>
        <label>Entrer votre email</label>
      </div>
      <div class="message-box">
		   <label>Your Message</label>
	  <textarea placeholder="&nbsp &nbsp  Votre message"></textarea>
      </div>
      <div class="input-box">
        <input type="submit" value="Envoyer Message">
      </div>
    </form>
  </div>
  </div>
			
		
		</section>
		
		
		
	
	
	</main>
	
	<!---------------------------------end_main-------------------------------->
	
	
	
		<!---------------------------------start_footer-------------------------------->
		<footer> 
			<div class="subscribe">
				<h2>Abonnez Nous</h2>
				<input type="email" placeholder="Entrer votre Email">
				<input type="button" value="Abonnez">
			</div> 	
				<div class="all">
				<div class="container">
					
				<div class="list_footer">
					<div class="lists_footer">
						<div class="logo"> 
							<img src="accueil/img/logo/zyrah.png" alt="logo">
							<p>Nos réseaux sociaux :</p>
						
						
						<ul>
							<li><a href="https://www.facebook.com/zyrah.grp/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							
							<li><a href="https://instagram.com/zyrah_grp?utm_medium=copy_link"target="_blank"><i class="fab fa-instagram"></i></a></li>
							
							
						</ul>
							</div>
					</div>
					
					
					<div class="lists_footer">
						<h2>Services</h2>
						<ul>
							<li><a href="#"><i class="fas fa-caret-right"></i> Site-web </a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> App-Mobile</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Design</a></li>
							
						</ul>
					</div>
					
					<div class="lists_footer">
						<h2>Liens importants</h2>
						<ul>
							<li><a href="#"><i class="fas fa-caret-right"></i> Acceuil</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Services</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> Commande</a></li>
							<li><a href="#"><i class="fas fa-caret-right"></i> A propos</a></li>
						</ul>
					</div>
					
					<div class="lists_footer">
						<h2>Adresse entreprise</h2>
						<ul>
							<li><span>Address:</span>Tlemcen,Algérie 13 000</li>
							<li><span>Telephone:</span> +213 54 00 73 071</li>
							<li><span>Email:</span> zyrahgroupe@gmail.com</li>
							
						</ul>
					</div>
					
					
					
				</div>
			</div>
			</div>
			
			
			<div class="copy_right">
				<div class="container">
					&copy;
				<p>Copy-Right © 2021 Disigned By Zyrah.</p>
				<ul>
					<li><a href="#">Terms & Condition</a></li>
					<li><a href="#">Privacy Policy</a></li>
					
				</ul>
			
			</div>
		</div>
		
		
		</footer>

</body>
</html>
