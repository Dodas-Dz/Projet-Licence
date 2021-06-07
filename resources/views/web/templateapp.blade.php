<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>template App</title>


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('app/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('app/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('app/css/btn.css')}}">
<link rel="icon" href="img/logo/Sans nom-2.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/>
<link rel="stylesheet" href="{{asset('app/css/templateslide.css')}}">
<link rel="stylesheet" href="{{asset('app/css/formulaire.css')}}">
<script src="js/miniprojet.js"></script>
<link rel="stylesheet" href="{{asset('app/css/btn.css')}}">
<link rel="stylesheet" href="{{asset('app/css/headerfooter.css')}}">
<link href="{{asset('app/css/template.css')}}" rel="stylesheet">	
<script src="jscolor.js"></script>



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
		<section class="home">
			<div class="container">
				<div class="home_section">
				
					<div class="home_content">
						<h1 class="H1"> Commencez <div class="size"> par créer</div> 
						</h1>
						 <h2>votre Application mobile !</h2>
						  <p>dés maintenant</p> 
						
						
					</div>
					
					
					<div class="img">
						<img src="app/img/designapp/undraw_Mobile_app_re_catg.svg" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>

<!-----------------------start templates slideshow----------------------------->
	<div class="page">	
		<div class="title">
			
			<h2>Nos design d' <span>Application mobile</span></h2>
		  </div>
	<section class="templates">
		
      <div class="containall">
		<div class="container">
		
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <div class="container">
            <img src="app/img\designapp\Crypto Investing App UI.png" class="image">
            <div class="text">
				<div class="overlay">
                    <section class="container">
					   <div class="down">
                           <h2>Crypto </h2>
						   
					 </div>
					</section>
				
          </div>
            </div>
		</div>
          </div>
      
        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <div class="container">
            <img src="app/img/designapp/Camera Sharing App_ Payment Screens.png" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Business</h2>
						
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <div class="container">
          <img src="app/img\designapp\Designer inspiration app.png" class="image">
          <div class="text"><div class="overlay">
            <section class="container">
				<div class="down">
					<h2>Art</h2>
					
			  </div>
             </section>
        </div>
          </div></div>
        </div>
    
    
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <div class="container">
            <img src="app/img\designapp\Healthy habits tracker.png" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Healthy</h2>
						
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="app/img\designapp\Natural AI food UI visual.png" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 >Food</h2>
					
			  </div>
                     </section>
          </div>
            </div></div>
          </div>

		  <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="app/img\designapp\Task management.png" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 >management</h2>
					
			  </div>
                     </section>
          </div>
            </div></div>
          </div>
          
          </div>
      
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
      </div>
      <br>
      
      
      <div class="dotsection" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
      </div>
    </div>
      </section>
	  <!----------------------end template------------>

      <!----------------------start pack------------>



		
<section class="pricing"> 
	<div class="container">
		<div class="title">
		<h3>Pack</h3>
		<h2>Nos pack  <span>Application mobile </span></h2>
	  </div>
  
	  
	  <div class="prcing_section">
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="app/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Basique</h2>
			<h3>10.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="null"> &#10008  </span>Disponible sur Google Play</li>
			<li><span class="null"> &#10008 </span>Disponible sur IOS </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="null"> &#10008 </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="null"> &#10008 </span>Marketing</li>
		   
		  </ul>
		  </div>
		</div>	
		
		<div style="border: 50px;" class="pricing_plans">
		  <div class="img_pricing">
			<img src="app/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Illimité</h2>
			<h3>15.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Disponible sur Google Play </li>
			<li><span class="null"> &#10008  </span>Disponible sur IOS </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="null"> &#10008 </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="null"> &#10008 </span>Marketing</li>
			
		  </ul>
		  </div>
		</div>
		
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="app/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>VIP</h2>
			<h3>20.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Disponible sur Google Play</li>
			<li><span class="check"> &#10004  </span>Disponible sur IOS </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="check"> &#10004  </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="check"> &#10004  </span>Marketing</li>
		   
		  </ul>
		  </div>
		</div>
		
	  </div>
	
	
	</div>
  </section> -->
  
  <!---------------end pack---------------->
		 

	
	


<!---------------start saisi formu------------->

<form>

	<section class="formulaire">
	
	  <div class="formulaire1">
		<h3> Formulaire</h3>
		 <h1>Formulaire <span>Application mobile</span></h1>
	   </div>

	   <div>

		<div class=inputs>
	<div class="formulaire2">
		<input type="text" placeholder="Enter nom projet" required>

	</div>

	

	<div class="formulaire6">
	
		
		
		<input  data-jscolor="{position:'center'}">
	 
	</div>
	<div class="formulaire6">
	
		
		
		
		<input placeholder="Entrer couleur secondaire" data-jscolor="{position:'center'}">
	 
	</div>




	<div class="formulaire3">
	  <select required>
			 <option value="">Choisissez un design</option>
			 <option value="Crypto">Crypto</option>
			 <option value="Healthy">Healthy</option>
			 <option value="Art">Art</option>
			 <option value="Business">Business</option>
			 <option value="Food">Food</option>
			 <option value="management">management</option>
			 
	  </select>

	</div>
		<div class="formulaire3">

		<select required>
				
				 <option value=""> Choisissez un type</option>
				 <option value=">Application web">Application web</option>
				 <option value="Native">Native</option>
				 <option value="Hybride">Hybride</option>
		</select>

		</div>


	  
	  <div class="formulaire3" >
		<select required>
			   <option value="">Choisissez un pack</option>
			   <option value="Basic">Basic</option>
			   <option value="Advanced">Advanced</option>
			   <option value="Premium">Premium</option>
			
		</select>
		<div class="formulaire3">
			<select class="fonts" required>
				   <option value="">Choisissez une police</option>
				   <option value="Arial" >Arial</option>
				   <option value="Georgia" >Georgia</option>
				   <option value="New Roman"  >New Roman</option>
				   <option value="Helvetica" >Helvetica</option>
				   <option value="Cambria" >Cambria</option>
				   <option value="Courier New" >Courier New</option>
				   <option value="Verdana" >Verdana</option>
				   <option value="Cambria" >Cambria</option>
				   
			</select>
	
		  </div>
	  </div>
	  <div class="formulaire5">
	  <textarea placeholder="Plus de details"></textarea>
	</div>
</div>
	  <div class="formulaire4">
		<button type="submit"> Valider  </button>
	  </div>
	</div> 
</section>
	</form>
	</div>

	<!--------------*end-formu--------------------->






		
        
		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
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
						<img src="app/img/logo/zyrah.png" alt="logo">
						<p>Nos réseaux sociaux :</p>
					
					
					<ul>
						<li ><a href="https://www.facebook.com/zyrah.grp/" target="_blank" ><i class="fab fa-facebook-f"></i></a></li>
						
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
				
			<p>Copy-Right © 2021 Disigned By Zyrah.</p>
			<ul>
				<li><a href="#">Terms & Condition</a></li>
				<li><a href="#">Privacy Policy</a></li>
				
			</ul>
		
		</div>
	</div>
	
	
	</footer>
	<script src="app/js/jscolor.js"></script>
    <script src="app/js/miniprojet.js"></script>


</body>
</html>
