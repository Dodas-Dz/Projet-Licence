<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>web service</title>
<link href="{{asset('web/css/webdev.css')}}" rel="stylesheet">	
<link rel="stylesheet" href="{{asset('web/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('web/css/headerfooter.css')}}">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
<link rel="icon" href="web/img/logo/Sans nom-2.png">
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
				<a href="template.html"> 
			  <button>  Commencez  </button> 
			</a>
			</div>
		  </div>
	
		
		
	
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
          <div class="logo"> <img src="web/img/logo/zyrah.png" alt="logo">
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
    <div class="container"> &copy;
      <p>Copy-Right © 2021 Disigned By Zyrah.</p>
      <ul>
        <li><a href="#">Terms & Condition</a></li>
        <li><a href="#">Privacy Policy</a></li>
      </ul>
    </div>
  </div>
</footer>
