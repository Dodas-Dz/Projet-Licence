<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="HandheldFriendly" content="true">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('accueil/css/headerfooter.css')}}">
    <link rel="stylesheet" href="{{asset('commande_admin/css/command.css')}}">
	<link rel="stylesheet" href="{{asset('commande_admin/css/all.min.css')}}">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('commande_admin/css/fontawesome.min.css')}}">
    <title>Zyrah | message admin</title>
</head>
<body>
@include('layouts.header')
    <main>


    

    <div class="containall">
    @forelse($messages as $message)
		<div class="text">
			<h1 class="votre">  </h1><h1 class="command"> Message</h1>
		</div>
        
        <div class="commande">
			<div class="unecommande">
            <div class="trash"><a href="{{ route('message.delete',$message->id) }}"><i class="fa fa-trash w3-large" ></i></a></div>
             <button class="accordion" id="id_commande">
				 <span>status :  <span id="circle"></span></span>
                ID MESSAGE  {{$message->id}}
             </button>
             <div class="panel" id="panel">
                <div class="dsc">
					<b>Nom </b>
                    <b>Email </b>
                    <b>message </b>
                  
                </div>
                <div class="values">
					<div class="nom_client"> {{$message->name}}  </div>
                    <div class="nom_client">  </div>
                    <div class="nom_commande">   {{$message->email}} </div>
                    <div class="nom_commande">   </div>
                    <div class="date_commande"> {{$message->message}} </div>

                </div>

              </div>
		   </div>
           @empty
           <div class="text">
			<h1 class="votre"> aucune </h1><h1 class="command"> Message</h1>
		</div>
		</div>
        @endforelse;
    </div>

</main>
@include('layouts.footer')
  <script src="commande_admin/js/command.js"></script>
  <script src="commande_admin/js/miniprojet.js"></script>
</body>
</html>