<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('commande_admin/css/headerfooter.css')}}">
    <link rel="stylesheet" href="{{asset('commande_admin/css/command.css')}}">
	<link rel="stylesheet" href="{{asset('commande_admin/css/all.min.css')}}">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('commande_admin/css/fontawesome.min.css')}}">
    <title>Zyrah | Commande admin</title>
</head>
<body>
@include('layouts.header')
    <main>
    @foreach($commandes as $commande)
    @endforeach

    

    <div class="containall">
		<div class="text">
			<h1 class="votre"> tout </h1><h1 class="command"> commandes</h1>
		</div>
        @foreach($commandes as $commande)
        <div class="commande">
			<div class="unecommande">
				<div class="trash"><i class="fa fa-trash w3-large" onclick=""></i></div>
             <button class="accordion" id="id_commande">
				 <span>status : <span id="circle"></span></span>
				 {{$commande->name}} , #service name 
             </button>
             <div class="panel" id="panel">
                <div class="dsc">
					<b>Nom de client</b>
                     <b>Nom commande </b>
                    <b>Date de commande </b>
                     <b>Date de rendez-vous </b>
                    <b>Etat de commande </b>
                </div>
                <div class="values">
					<div class="nom_client">{{$commande->user->name}}</div>
                    <div class="nom_commande">{{$commande->name}} </div>
                    <div class="date_commande">{{$commande->created_at}}</div>
                     <div class="date_rdv">{{$commande->rendez_vous->date}}</div>
                     <div id="Etat">{{$commande->etat}} </div>
                </div>

				<div class="changedetat">
					<label for="box1">Changer l'Etat de commande: </label>
					<select id="box1" onChange="myNewFunction(this);">
						<option value="">changer d'Etat</option>
						<option value="pre">pre-rdv</option> 
						<option value="onit">working on it</option>
						<option value="done">done</option>
						<option value="canceled">annulé</option>
						<option value="waiting">attend de pay</option>
					  </select>

				</div>
              </div>
		   </div>
		</div>
        @endforeach
    </div>

</main>
@include('layouts.footer')
  <script src="commande_admin/js/command.js"></script>
  <script src="commande_admin/js/miniprojet.js"></script>
</body>
</html>