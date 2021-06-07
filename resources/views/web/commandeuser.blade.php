<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('commande/css/headerfooter.css')}}">
    <link rel="stylesheet" href="{{asset('commande/css/command.css')}}">
    
    <title>Zyrah | my commande</title>
</head>
<body>
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


    <main>
    <div class="containall">
		<div class="text">
			<h1 class="votre"> Votre  </h1><h1 class="command"> commandes</h1>
		</div>


        <div class="commande">
             <button class="accordion" class="id_commande" >#idcommande
             </button>
             <div class="panel">
                <div class="dsc">
                     <b>Nom commande </b>
                    <b>Date de commande </b>
                     <b>Date de rendez-vous </b>
                    <b>Etat de commande </b>
                </div>
                <div class="values">
                    <div class="nom_commande">Nom commande </div>
                    <div class="date_commande">Date de commande </div>
                     <div class="date_rdv">Date de rendez-vous </div>
                     <div class="Etat">Etat de commande </div>
                </div>


            </div>
  
      








    </div>
</main>
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
						<img src="img/logo/zyrah.png" alt="logo">
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
				&copy;
			<p>Copy-Right © 2021 Disigned By Zyrah.</p>
			<ul>
				<li><a href="#">Terms & Condition</a></li>
				<li><a href="#">Privacy Policy</a></li>
				
			</ul>
		
		</div>
	</div>
	
	
	</footer>
  <script src="commande/js/command.js"></script>
</body>
</html>