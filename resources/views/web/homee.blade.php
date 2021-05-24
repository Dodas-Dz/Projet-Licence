<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ZYRAH | Home</title>
<link rel="stylesheet" href="{{asset('css/allmain.css')}}">	
<link rel="stylesheet" href="{{asset('css/homeres.css')}}">	
<link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>

<body>
	<!--------------------------------start_header------------------------------->
	<header>
		<div class="container">
			<div class="head">
				<div class="logo"> 
			<img src="img1/logo.png" alt="logo">
		</div>
		
		
		<div class="list"> 
			<ul>
				<li><a href="#"> Home</a></li>
				<li><a href="#"> About </a></li>
				<li><a href="#"> Service <i class="fas fa-chevron-down"></i> </a></li>
				<li><a href="#"> Contact </a></li>
				@guest
				@if (Route::has('login') or Route::has('register'))
                             
							 <li class="get_btn"> <a  href="{{ route('login') }}">{{ __('Log/Reg') }}</a></li>
								
				@endif
				@else<li ><a href="#"> Account </a>
				<ul>
								<li class="get_btn"> <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a></li>
						
					
						<li  class="get_btn">  <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                <li>

                                 <li > <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form><li>   
							
						</li>   
					</ul>
				
				</li>
			</ul>
				
							
				
							
					
				
				</li>
            
                           
                       
        
							
                                
                               
                        @endguest
			</ul>
		</div>
			
			</div>
		
		
		
		
		</div>
		
	
	</header>

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
                       
					</div>
					
					
					<div class="img">
						<img src="img1/banner-image.png" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>

		<!----------------start_about_section---------------------->
		<section class="about">
			<div class="container">
				<div class="title">
					<h3>Caractéristiques</h3>
					<h2>Ce que nous<span>faisons</span></h2>
				</div>
				<div class="about_section">
					<div class="about_content animation1">
						<i class="fas fa-laptop-code fa-2x items"></i>
						<h2>Site web </h2>
                        <p>crérer votre site web  personnel ou d'entreprise commencez votre business
attiré l'intention des gens vendez vos articles en toute facilité et sécurité 
développer vos passion en créant un blog totalement pour vous, 
ZYRAH est là, pour vous satisfaire </p> 

						<p></p>
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>
					</div>
					
					<div class="about_content animation1">
						<i class="fas fa-pencil-alt fa-2x items"></i>
						<h2>faisons</h2>
                        <p>élaborer une application mobile accessible pour tout le monde livrer vos plus bon plat 
ou articles, gérer vos emplois du temps d'entreprise ou  personnel en toute simplicité
ZYRAH est là, pour vous faciliter la vie </p>
						
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>
					</div>
					
					<div class="about_content animation1">
						<i class="fas fa-cloud fa-2x items"></i>
						<h2>Application mobil</h2>
						<p>imaginer vos meuilleur logo unique que pour vous, donner nous vos style, slogan, forme , couleur 
ou même rien de celà 
ZYRAH est là, pour vous comprendre  </p>
						<a href="#"><i class="fas fa-long-arrow-alt-right direction"></i></a>
					</div>
				</div>
			</div>
		</section>
		
		<!----------------start_service_section-------------------->
		<section class="about service">
			<div class="container">
				<div class="title">
					<h3>Services</h3>
					<h2>Devlopement des site web <span>Services</span></h2>
				</div>
				<div class="about_section">
					<div class="about_content animation2 animation3 animation4">
						<div class="after"></div>
						<i class="fas fa-laptop-code fa-2x items"></i>
						<h2>User Reacharch</h2>
						<p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit. Ipsa libero ab voluptatibus itaque quas in voluptas militant.</p>
					</div>
					
					<div class="about_content animation2 animation3 animation4">
						<i class="fas fa-pencil-alt fa-2x items"></i>
						<h2>User Reacharch</h2>
						<p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit. Ipsa libero ab voluptatibus itaque quas in voluptas militant.</p>
					</div>
					
					<div class="about_content animation2 animation3 animation4">
						<i class="fas fa-cloud fa-2x items"></i>
						<h2>User Reacharch</h2>
						<p>Lorem ipsum dolor sit amet, consecte tur adipisicing elit. Ipsa libero ab voluptatibus itaque quas in voluptas militant.</p>
					</div>
					
				
						
					</div>
				</div>
			
		</section>
		
		<!----------------start_about_us_section------------------->

		
		
		<!----------------start_portfolio_section------------------>
		
		<!----------------start_pricing_section-------------------->
		
		
		<!----------------start_our_team_section------------------->
		
		
		<!----------------start_stories_section-------------------->
		<section class="stories"> 
			<div class="container">
				<div class="title">
					<h3>Our Success </h3>
					<h2>Our Success <span>Stories</span></h2>
				</div>
				<div class="stories_section">
					<div class="stories_content">
						<i class="fas fa-tv fa-2x"></i>
						<h2>Total Project</h2>
						<p>28 K</p>
					</div>
					
					<div class="stories_content">
						<i class="fas fa-trophy fa-2x"></i>
						<h2>Total Project</h2>
						<p>28 K</p>
					</div>
					
					<div class="stories_content">
						<i class="fas fa-tv fa-2x"></i>
						<h2>Total Project</h2>
						<p>28 K</p>
					</div>
					
					<div class="stories_content">
						<i class="fas fa-comments fa-2x"></i>
						<h2>Total Project</h2>
						<p>28 K</p>
					</div>
				</div>
			</div>
		
		</section>
		
		
		<!----------------start_Feadback_section------------------->
		
		
		<!----------------start_Update_section--------------------->
		
		<!----------------start_Contact_section-------------------->
		<section class="contact">
			<div class="title">
					<h3>Blog</h3>
					<h2>Latest Blog <span>Update</span></h2>
				</div>
			<div class="contact_section">
				<div class="contact_content">
					<input type="text" placeholder="Name" >
					<input type="email" placeholder="email" >
					<input type="text" placeholder="Phone" >
					<input type="text" placeholder="Subject" >
					<textarea placeholder="Your Message"></textarea>
					<input type="button" value="Sent Message">
				</div>
			</div>
			
		
		</section>
		
		
		
		
	
	</main>
	
	<!---------------------------------end_main-------------------------------->
	
	
	
	<!---------------------------------start_footer-------------------------------->
	<footer> 
		<div class="subscribe">
			<h2>Subscribe Our Newsletter</h2>
			<input type="email" placeholder="Enter Your Email">
			<input type="button" value="subscribe">
		</div> 	
			<div class="all">
			<div class="container">
				
			<div class="list_footer">
				<div class="lists_footer">
					<div class="logo"> 
						<img src="img/logo/logo.png" alt="logo">
						<p>There are many variations passages of Lorem Ipsum available, but these majority have suffered</p>
					
					
					<ul>
						<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#"><i class="fab fa-youtube"></i></a></li>
						
					</ul>
						</div>
				</div>
				
				
				<div class="lists_footer">
					<h2>Help Links</h2>
					<ul>
						<li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Our Company</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Portfolio</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Praivacy Policy</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Latest Blog</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Carrer</a></li>
					</ul>
				</div>
				
				<div class="lists_footer">
					<h2>Important Links</h2>
					<ul>
						<li><a href="#"><i class="fas fa-caret-right"></i> Blog</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Help Center</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Community</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Marketplace</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> Career</a></li>
						<li><a href="#"><i class="fas fa-caret-right"></i> About Us</a></li>
					</ul>
				</div>
				
				<div class="lists_footer">
					<h2>Company Address</h2>
					<ul>
						<li>There are many variations passages of Lorem Ipsum available,</li>
						<li><span>Address:</span> B S C More, Nagessory, Kurigram</li>
						<li><span>Telephone:</span> +654 023 9587</li>
						<li><span>Email:</span> example@gmail.com</li>
						
					</ul>
				</div>
				
				
				
			</div>
		</div>
		</div>
		
		
		<div class="copy_right">
			<div class="container">
			<p>Copy-Right © 2020 Dising By Ahmed & Djaballah.</p>
			<ul>
				<li><a href="#">Terms & Condition</a></li>
				<li><a href="#">Privacy Policy</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		
		</div>
	</div>
	
	
	</footer>

</body>
</html>
