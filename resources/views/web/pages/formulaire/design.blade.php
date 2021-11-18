<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | commande </title>

<link href="{{asset('templatedes/css/template.css')}}" rel="stylesheet">	
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<link rel="stylesheet" href="{{asset('templatedes/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('templatedes/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('templatedes/css/btn.css')}}">
<link rel="icon" href="templatedes/img/logo/Sans nom-2.png">
<link rel="stylesheet" href="{{asset('templatedes/css/css3.0.css')}}">
<link rel="stylesheet" href="{{asset('apropos/css/headerfooter.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/themes/monolith.min.css"/>
<link rel="stylesheet" href="{{asset('templatedes/css/templateslide.css')}}">

<link rel="stylesheet" href="{{asset('web/css/formulaire.css')}}">
<script src="templatedes/js/miniprojet.js"></script>
<link rel="stylesheet" href="{{asset('templatedes/colorpicker.css')}}">
<script src="templatedes/js/jscolor.js"></script>



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
						<h1> Commencez <div class="size"> par créer vos</div> 
						</h1>
						 <h2> Design professionnel </h2>
						  <p>dès maintenant</p> 
						
						
					</div>
					
					
					<div class="img">
						<img src="templatedes/img/interface design/undraw_3d_modeling_h60h.svg" alt="img">
					
					</div>
				
				</div>
			</div>
		</section>

<!-----------------------start templates slideshow----------------------------->

<section class="templates">
	
	<div class="page">	
		<div class="title">
			
			<h3>Design</h3>
		<h2>Nos design  <span>Professionnel </span></h2>
	 
		</div>
		
		  <div class="description">
			<h3>On vous propose<br> </h3>
			<h4><br>Un large choix de design <br>
				(logo, carte visite, publicité, étiquette, menu restaurent... )<br>
				pour vous projetez dans vos projets<br>  
				spécial entreprise, restaurent ou même cabinet médical...

				
			</h4>
		</div>
	
	
		
      <div class="containall">
		<div class="container">
		
      <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->

		<div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <div class="container">
				<img src="templatedes/img/interface design/126053906_211701753690135_6618840775837655745_n.jpg" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Carte visite</h2>
						
					 
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
      
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <div class="container">
			<img src="templatedes/img/interface design/12123.png" class="image">
            <div class="text">
				<div class="overlay">
                    <section class="container">
					   <div class="down">
						<h2>Menu</h2>
                         
					 </div>
					</section>
				
          </div>
            </div>
		</div>
          </div>
      
        
        <div class="mySlides fade">
          <div class="numbertext">3 / 6</div>
          <div class="container">
			<img src="templatedes/img/interface design/125395116_414613646232238_1607427446347216283_n.png" class="image">
          <div class="text"><div class="overlay">
            <section class="container">
				<div class="down">
					<h2>Etiquette <br>produit</h2>
				 
			  </div>
             </section>
        </div>
          </div></div>
        </div>
		<div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="templatedes/img/interface design/medical.jpg" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 >Cabinet<br> medical</h2>
				  
			  </div>
                     </section>
          </div>
            </div>
		</div>
          </div>
    
    
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <div class="container">
            <img src="templatedes/img/interface design/3636586.png" class="image">
            <div class="text"><div class="overlay">
                <section class="container">
					<div class="down">
						<h2>Menu</h2>
					  
				  </div>
                 </section>
          </div>
            </div></div>
          </div>
          <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="templatedes/img/interface design/Cet article n'est pas disponible _ Etsy.jpg" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 >Carte Visite</h2>
				  
			  </div>
                     </section>
          </div>
            </div></div>
          </div>
		 

		  <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <div class="container">
            <img src="templatedes/img/interface design/pub.jpg" class="image">
            <div class="text"><div class="overlay">
              <section class="container">
				<div class="down">
					<h2 >Publicité</h2>
				  
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

      
	 <!----------------------start pack------------------->


		
<section class="pricing"> 
	<div class="container">
		<div class="title">
		<h3>Pack</h3>
		<h2>Nos pack  <span> Design  </span></h2>
	  </div>
  
	  
	  <div class="prcing_section">
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="templatedes/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Basique</h2>
			<h3>5.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="check"> &#10004 </span>Carte visite </li>
			<li><span class="check"> &#10004  </span>Etiquette produit</li>
			<li><span class="null"> &#10008  </span>Posts réseaux sociaux</li>
			<li><span class="null"> &#10008 </span>Flayers</li>
			<li><span class="null"> &#10008  </span>Affiche publicitaire</li>
			
			
		   
		  </ul>
		  </div>
		</div>	
		
		<div style="border: 50px;" class="pricing_plans">
		  <div class="img_pricing">
			<img src="templatedes/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>Illimité</h2>
			<h3>10.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="check"> &#10004 </span>Carte visite </li>
			<li><span class="check"> &#10004  </span>Etiquette produit</li>
			<li><span class="null"> &#10008  </span>Posts réseaux sociaux</li>
			<li><span class="null"> &#10008 </span>Flayers</li>
			<li><span class="check"> &#10004  </span>Affiche publicitaire</li>
			
		  </ul>
		  </div>
		</div>
		
		<div class="pricing_plans">
		  <div class="img_pricing">
			<img src="templatedes/img/backg/web new pro 2.png" alt="img">
		  </div>
		  <div class="info_pricing">
			<h2>VIP</h2>
			<h3>15.000.00 da</h3>
			
		  
		  <ul>
			<li><span class="check"> &#10004  </span>Logo professionnel</li>
			<li><span class="check"> &#10004 </span>Carte visite </li>
			<li><span class="check"> &#10004  </span>Etiquette produit</li>
			<li><span class="check"> &#10004  </span>Posts réseaux sociaux</li>
			<li><span class="check"> &#10004 </span>Flayers</li>
			<li><span class="check"> &#10004  </span>Affiche publicitaire</li>
		   
		  </ul>
		  </div>
		</div>
		
	  </div>
	
	
	</div>
  </section> 
  
  <!---------------end pack---------------->
		 
		<script src="https://cdn.jsdelivr.net/npm/@simonwep/pickr/dist/pickr.min.js"></script>
		<script src="templatedes/js/miniprojet.js"></script>
	</section>
	


<!---------------start saisi formu------------->

<form  action="{{ route('commandedesign') }}" method="post">

	<section class="formulaire">
	
	  <div class="formulaire1">
		<h3> Formulaire</h3>
		 <h1>Formulaire <span>Design </span></h1>
	   </div>

	   <div>

		<div class=inputs>
	<div class="formulaire2">
		<input type="text" placeholder="Enter nom projet" name="name" id="name" class="form-control" required>

	</div>

	

	<div class="formulaire6">
	
		
		
		<input  data-jscolor="{position:'center'}" name="couleur1" id="couleur1" class="form-control">
	 
	</div>
	<div class="formulaire6">
	
		
		
		
		<input placeholder="Entrer couleur secondaire" data-jscolor="{position:'center'}"  name="couleur2" id="couleur2" class="form-control">
	 
	</div>





		<div class="formulaire3">

		<select name="type" id="type" >
				
				 <option value="...."> Choisissez un thème</option>
				 <option value="Restauration & food">Restauration & food</option>
				 <option value="Vêtement & mode">Vêtement & mode</option>
				 <option value="Sante">Santé</option>
				 <option value="Environnement">Environnement</option>
				 <option value="Art">Art</option>
		</select>

		</div>


	  
	  <div class="formulaire3">
		<select name="pack" id="pack" class="form-control" required >
			   <option value="....">Choisissez un pack</option>
			   <option value="001">Basique</option>
			   <option value="002">Ilimité</option>
			   <option value="003">Vip</option>
			
		</select>
		<div class="formulaire3">
			<select name="police" id="police" class="form-control" class="fonts" required>
				   <option value="....">Choisissez une police</option>
				   <option value="Arial" disabled>Arial</option>
				   <option value="Georgia" >Georgia</option>
				   <option value="New Roman" disabled >New Roman</option>
				   <option value="Helvetica" >Helvetica</option>
				   <option value="Cambria" disabled>Cambria</option>
				   <option value="Courier New" >Courier New</option>
				   <option value="Verdana" disabled>Verdana</option>
				   <option value="Cambria" disabled>Cambria</option>
				   
			</select>
	
		  </div>
	  </div>
	  <div class="formulaire5" >
	  <textarea name="description" id="description" placeholder="Plus de details"></textarea>
	</div>
</div>
	  <div class="formulaire4">
		<a><button type="submit"> Valider  </button><a>
	  </div>
	</div> 
</section>
	</form>
	</div>

	<!--------------*end-formu--------------------->






		
	
	<!---------------------------------end_main------------------------------------>
	
	
	
	<!---------------------------------start_footer-------------------------------->
	@include('layouts.footer')
	<script src="js/jscolor.js"></script>


</body>
</html>
