<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah |  commande</title>

<link href="{{asset('web/css/template.css')}}" rel="stylesheet">	
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('web/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('web/css/responsive.css')}}">
<link rel="stylesheet" href="{{asset('web/css/btn.css')}}">
<link rel="icon" href="img/logo/Sans nom-2.png">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/>

<link rel="stylesheet" href="{{asset('web/css/formulaire.css')}}">
<script src="js/miniprojet.js"></script>
<script src="jscolor.js"></script>
<link rel="stylesheet" href="{{asset('web/css/headerfooter.css')}}">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<link rel="stylesheet" href="{{asset('web/css/templateslide.css')}}">

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
						<h1 class="H1"> Commencez <div class="size"> par créer</div> 
						</h1>
						 <h2>votre siteweb !</h2>
						  <p>dés maintenant</p> 
						
						
					</div>
					
					
					<div class="img">
						<img src="web/img/templateimgs/Web development _Isometric.png" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>

<!-----------------------start templates slideshow----------------------------->
	<div class="page">	
		<div class="title">
			
			<h2>Nos siteweb <span>Templates</span></h2>
		  </div>
	<section class="templates">
		
      <div class="containall">
		<div class="container">
		
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">

            <div class="container">
            <img src="web/img/templateimgs/lense.png" class="image">
            <div class="text">
				<div class="overlay">
                    <section class="container">
					   <div class="down">
                           <h2>lense </h2>
						   <div class="wrapper">
							<a href="{{route('lense')}}" target="_blank"><span>Voir!</span></a>
						  </div>
					 </div>
					</section>
				
          </div>
            </div>
		</div>
          </div>
      
        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <div class="container">
            <img src="web/img/templateimgs/ethereal.png" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Ethereal</h2>
						<div class="wrapper">
							<a href="{{route('ethereal')}}" target="_blank"><span>Voir!</span></a>
						  </div>
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
      
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <div class="container">
          <img src="web/img/templateimgs/food.png" class="image">
          <div class="text"><div class="overlay">
            <section class="container">
				<div class="down">
					<h2>Restaurant </h2>
					<div class="wrapper">
						<a  href="{{route('restaurant')}}" target="_blank"><span>Voir!</span></a>
					  </div>
			  </div>
             </section>
        </div>
          </div></div>
        </div>
    
    
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <div class="container">
            <img src="web/img/templateimgs/strata.png" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Strata</h2>
						<div class="wrapper">
							<a  href="{{route('strata')}}"target="_blank"><span>Voir!</span></a>
						  </div>
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="web/img/templateimgs/stronglytyped.png" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 ">Stronglytyped</h2>
					<div class="wrapper">
						<a  href="{{route('strong')}}" target="_blank"><span>Voir!</span></a>
					  </div>
			  </div>
                     </section>
          </div>
            </div></div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <div class="container">
            <img src="web/img/templateimgs/twenty.png" class="image">
            <div class="text">
                <div class="overlay">
                     <section class="container">
						<div class="down">
							<h2>Twenty</h2>
							<div class="wrapper">
								<a  href="{{route('twenty')}}" target="_blank"><span>Voir!</span></a>
							  </div>
					  </div>
                     </section></div>
                 
            </div></div>
          </div>
	  </div>
		
	
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
		
	</div>
      <br>
      
      <!-- The dots/circles -->
      <div class="dotsection" style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
      </div>
    </div>
</div>
      </section>
	  <!----------------------end template------------>



		
<section class="pricing"> 
	<div class="container">
		<div class="title">
		<h3>Pack</h3>
		<h2>Nos pack  <span>Site Web</span></h2>
	  </div>
  
	  
	  <div class="prcing_section">
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="web/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Basique</h2>
			<h3>10.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Domaine personalisé</li>
			<li><span class="null"> &#10008 </span>Espace de stockage </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="null"> &#10008 </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="null"> &#10008 </span>Référencement SEO</li>
		   
		  </ul>
		  </div>
		</div>	
		
		<div style="border: 50px;" class="pricing_plans">
		  <div class="img_pricing">
			<img src="web/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Illimité</h2>
			<h3>15.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>  Domaine personalisé </li>
			<li><span class="check"> &#10004  </span>Espace de stockage </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="null"> &#10008 </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="null"> &#10008 </span>Référencement SEO</li>
			
		  </ul>
		  </div>
		</div>
		
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="web/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>VIP</h2>
			<h3>20.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Domaine personalisé</li>
			<li><span class="check"> &#10004  </span>Espace de stockage </li>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="check"> &#10004  </span>Maitenance</li>
			<li><span class="check"> &#10004  </span>Paiement en ligne sécurisé</li>
			<li><span class="check"> &#10004  </span>Référencement SEO</li>
		   
		  </ul>
		  </div>
		</div>
		
	  </div>
	
	
	</div>
  </section> -->
  
  <!---------------end pack---------------->
		 
		
		

	


<!---------------start saisi formu------------->

<form action="{{ route('commande') }}" method="post">
@csrf

	<section class="formulaire">
	  <div class="formulaire1">
		<h3> Formulaire</h3>
		 <h1>Formulaire <span>Site web</span></h1>
	   </div>
	   <div>
			<div class=inputs>
		<div class="formulaire2">
		<input type="text"  placeholder="Enter nom projet" name="name" id="name" class="form-control" required>
	</div>
	<div class="formulaire6">
		<input  data-jscolor="{position:'center'}"  name="couleur1" id="couleur1" class="form-control" required>
	</div>
	<div class="formulaire6">
		<input placeholder="Entrer couleur secondaire" data-jscolor="{position:'center'}"  name="couleur2" id="couleur2" class="form-control">
	</div>
	<div class="formulaire3">
	  <select class="form-control" name="tamplate" id="tamplate" required>
			 <option value="">Choisissez une template</option>
			 <option value="Ethereal">Ethereal</option>
			 <option value="Restaurant">Restaurant</option>
			 <option value="Lens">Lens</option>
			 <option value="Blog">Blog</option>
			 <option value="Strongly typed">Strongly typed</option>
			 <option value="Twenty">Twenty</option>
	  </select>
	</div>
		<div class="formulaire3">

		<select name="type" id="type" required>
				
				 <option value=""> Choisissez un type</option>
				 <option value="Restauration">Restauration</option>
				 <option value="Blog">Blog</option>
				 <option value="Site vitrine">Site vitrine</option>
				 <option value="e-commerce">e-commerce</option>
				 <option value="Site communautaire">Site communautaire</option>
		</select>
		</div>
	  <div class="formulaire3">
		<select name="pack" id="pack" required>
			   <option value="">Choisissez un pack</option>
			   <option value="001">Basic</option>
			   <option value="002">Advanced</option>
			   <option value="003">Premium</option>
			
		</select>
		<div class="formulaire3">
			<select class="fonts" name="police" id="police" required>
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
	  		<textarea placeholder="Plus de details" name="description" id="description"></textarea>
		</div>
	</div>
	  <div class="formulaire4">
	  	<a>
		<button type="submit" > Valider  </button>
</a>
	  </div>
	</div> 
	</section>
	</form>
	</div>

	<!--------------*end-formu--------------------->






		
		
        
		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
	<!---------------------------------start_footer-------------------------------->
	@include('layouts.footer')
	<script src="web/js/jscolor.js"></script>
    <script src="web/js/miniprojet.js"></script>

</body>
</html>
