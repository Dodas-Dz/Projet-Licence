<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Zyrah | paiment</title>

<link rel="icon" type="image/png" href="accueil/img/logo/Sans nom-2.png" >
<link rel="stylesheet" href="{{asset('paiment/paiment.css')}}">	
<link rel="stylesheet" href="{{asset('accueil/css/all.min.css')}}">	
<link rel="stylesheet" href="{{asset('accueil/css/respensive.css')}}">
<link rel="stylesheet" href="{{asset('accueil/css/headerfooter.css')}}">
</head>
<body>
@include('layouts.header')
<div class="card mt-50 mb-50">
    <div class="card-title mx-auto"> Payment</div>
    <div class="nav">
        <ul class="mx-auto">
            <li class="active"><a href="#"></a></li>
        </ul>
    </div>
    <form> 
        
        <div class="row row-1">
           
          
     
        </div> <span id="card-header">Add new card:</span>
        <div class="row-1">
            <div class="row row-2"> <span id="card-inner">Card holder name</span> </div>
            <div class="row row-2"> <input type="text" placeholder="Bojan Viner"> </div>
        </div>
        <div class="row three">
            <div class="col-7">
                <div class="row-1">
                    <div class="row row-2"> <span id="card-inner">Card number</span> </div>
                    <div class="row row-2"> <input type="text" placeholder="5134-5264-4"> </div>
                </div>
            </div>
            <div class="col-2"> <input type="text" placeholder="Exp. date"> </div>
            <div class="col-2"> <input type="text" placeholder="CVV"> </div>
        </div> <a href="{{ route('commandeuser')}}"><button class="btn d-flex mx-auto"><b>valide</b><a></button>
    </form>
</div>




</body>
</html>