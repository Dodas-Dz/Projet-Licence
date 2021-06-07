<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | A propos</title>
<link rel="stylesheet" href="{{asset('apropos/css/css.css')}}">	
<link rel="stylesheet"href="{{asset('apropos/css/all.min.css')}}">	
<link rel="stylesheet"href="{{asset('apropos/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" 
integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">
</head>

<body>
	<!--------------------------------start_header------------------------------->
	<header>
		<div class="container">
			<div class="head">
				<div class="logo"> 
			<img src="apropos/img/logo/zyrah.png" alt="logo">
		</div>
		
		
		<nav  class="primary-navigation">
			<ul >
				  <li><a href="#">Acceuil</a></li>
				  <li><a href="#">Services &dtrif;</a>
						<ul class="dropdown">
						    <li><a href="C:\Users\Zerktea\Desktop\mini projet\webdev.html" >Site-web</a></li>
						    <li><a href="C:\Users\Zerktea\Desktop\mini projetapp\appmobile.html">App-Mobile</a></li>
						    <li><a href="C:\Users\Zerktea\Desktop\miniprojetdesign\design.html">Design</a></li>
                          
					    </ul>	
					</li>
					<li><a href="#">commande</a></li>
					<li><a href="#">commande admin</a></li>
					<li><a href="#">A propos</a></li>
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
	<!-- Slideshow container -->

	
	<!--------------------------------start_main------------------------------->
	<main> 
		
		<!---------------------------photo about us----------------------->
		
			<section class="aboutus">
				<div class="container_aboutus">
					<div class="aboutus_section">
					
						<div class="img1">
							<img src="apropos/img/background/undraw_Group_chat_re_frmo.png" alt="img1">
							
							
						</div>
						
						<div class="img3">
							<img src="apropos/img/background/undraw_co-working_825n.png" alt="img3" >
						
						</div>

						<div class="img2">
							<img src="apropos/img/background/undraw_meet_the_team_e5b7.svg" alt="img2" >
						
						</div>
					
					</div>
				</div>
			</section>
			<!---------------------------end photo about us----------------------->

		<!---------------------------start text about us----------------------->

<section class="aboutus2">
	

    <div class="aboutsection">
			<div class="texte">
		   		<h1>A propos de nous</h1>
				<h2>Créateurs et fondateur de</h2>
				<h3>L'équipe ZYRAH,</h3>
				   
	        </div>
            
			<div class="texte1">
	           <p class="p1">
				             Bienvenue chez ZYRAH, votre source numéro un
							<br>de création de site web,d'application mobile
							<br> et tout ce qui concerne design 
							<br>(logo, carte visite, flayers...).
							<br>
		                    <br>Nous nous engageons à vous fournir le meilleur 
							<br> en mettant l'accent sur la fiabilité et
		                    <br>la sécurité .
							
							<br>Nous nous efforçons à transformer notre 
							<br> passion pour l'informatique en une boutique
	                        <br> en ligne en plein essor pour vous satisfaire.
	                        <br>
							
		      </p>

		</div>
	</div>

</section>
		
		
		<!----------------start_our_team_section------------------->
		<section class="our_team">
			<div class="container">
				<div class="title">
					<h3>Membre du groupe</h3>
					<h2>Nos membre du <span>Groupe</span></h2>
				</div>
				<div class="team_section">
					<div class="team_content">
						<div class="c1">
						
						<h2>BENDELLA Anes</h2>
						<p>Dévlopper Front-End <br>&<br> Designer<br> </p>
						<ul><br>
							<li><a href="https://www.facebook.com/aness.bend"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/AnesBendella"target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/anes-bendella-75b67b20b/"target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
						<div  class="img_team">
							<img  src="apropos/img/our_team/anes.jpg" alt="img">
							</div>
						</div>
					</div>
					
					<div class="team_content">
						<h2>TABET ZATLA Hadjer</h2>
						<p class=>Développeur Back-End <br>&<br> Expert UML <br> </p>
						<ul><br>
							<li><a href="https://www.facebook.com/hadjer.tabett"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/tabet_hadjer"target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/hadjer-tabet-290a1b175"target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
						<div class="img_team">
							<img src="apropos/img/our_team/hadjer1.jpg" alt="img">
						</div>
					</div>
					<div class="team_content">
						<h2>ZENNAKI Younes</h2>
						<p class=>Développer Full Stack <br>&<br> Designer <br></p>
						<ul><br>
							<li><a href="https://www.facebook.com/younes.zennaki.13"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://www.linkedin.com/in/younes-zennaki-371a71202/"target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/younes-zennaki-371a71202/"target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
						<div class="img_team">
							<img src="apropos/img/our_team/younes.jpg" alt="img">
						</div>
					</div>
					<div class="team_content">
						<h2>SEDDIKI Romaissa</h2>
						<p>Développeur app mobile<br>& <br>Expert UML <br> </p>
						<ul><br>
							<li><a href="https://www.facebook.com/profile.php?id=100008641262994"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/RomayssaSeddiki?s=07"target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/romayssa-seddiki-0aba12213"target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
						<div class="img_team">
							<img src="apropos/img/our_team/romayssa.jpg" alt="img">
						</div>
					</div>
					
					<div class="team_content">
						<h2>BELLOUFA Zakaria</h2>
						<p>Développeur Back-End <br>&<br> Front-End <br></p>
						<ul><br>
							<li><a href="https://www.facebook.com/z4aki"target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="https://twitter.com/z13gaming"target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="https://www.linkedin.com/in/zakaria-beloufa-919a11213/"target="_blank"><i class="fab fa-linkedin"></i></a></li>
						</ul>
						<div class="img_team">
							<img src="apropos/img/our_team/zaki.jpg" alt="img">
						</div>
					</div>
				</div>
			</div>
		
		</section>
		
		
		<!----------------start_stories_section-------------------->
		
		
		
		<!----------------start_Feadback_section------------------->
		<section class="feadback">
			<div class="container">
				<div class="title">
					<h3>Retour clients </h3>
					<h2>Ce qu'ils disent sur nous</h2>
				</div>
				<div class="feadback_section">
					<div class="feadback_content">
						<h2>mr...</h2>
						<span>Web Developer</span>
						<p>Compétence, rapidité, design l'équipe ZYRAH à de quoi vous faire plaisir sur tout les points </p>
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						
						<div class="img_feadback">
							<img src="apropos/img/profil.png" alt="img">
						</div>
					</div>
					
					<div class="feadback_content">
						<h2>mr.BOUKHALF</h2>
						<span>Web Developer & Professor</span>
						<p>Je l'est connait en tant qu'étudiant une équipe de choc ils sont sans arrêt
							 ils cherchent, travaillent se lancent ils n'ont peur de rien</p>
						
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						
						<div class="img_feadback">
							<img src="apropos/img/profil.png" alt="img">
						</div>
					</div>
					
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
						<img src="apropos/img/logo/zyrah.png" alt="logo">
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
