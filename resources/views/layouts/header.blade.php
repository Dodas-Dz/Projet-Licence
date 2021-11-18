<!--------------------------------start_header------------------------------->
<header>
  <div class="container">
    <div class="head">
      <div class="logo"> <img src="{{asset('img/zyrah.png')}}" alt="logo"> </div>
      <nav  class="primary-navigation">
        <ul >
          <li><a href="{{route('home')}}">Acceuil</a></li>
          <li><a href="#" onclick="openlist()">Services <span id="arow"><i id="arrow" class="fas fa-angle-down"></i></span></a>
            <ul class="dropdown">
              <li><a href="{{route('serviceweb')}}" >Site-web</a></li>
              <li><a href="{{route('serviceapp')}}">App-Mobile</a></li>
              <li><a href="{{route('servicedes')}}">Design</a></li>
            </ul>
          </li>
          @can('isUser')
          <li><a href="{{route('commandeuser')}}">commande</a></li>
          @endcan
          @can('isAdmin')
          <li><a href="{{route('commandeadmin')}}">commande admin</a></li>
          <li><a href="{{route('allmessage')}}">Message</a></li>
          @endcan
          <li><a href="{{route('apropos')}}">A propos</a></li>
          @guest
          @if (Route::has('login') or Route::has('register'))
          <li class="get_btn"> <a  href="{{ route('login') }}">{{ __('Log/Reg') }}</a></li>
          @endif<!----> 
          @else
          <li >
          <a href="#"> Account </a>
          <ul class="dropdown">
            <li > <a   href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} </a></li>
            <li  > <a  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> {{ __('Logout') }} </a> </li>
            <li >
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>
            </li>
            </li>
          </ul>
          </li>
          </li>
          @endguest
        </ul>
      </nav>
    </div>
  </div>
  </div>
</header>

<!--------------------------------end_header-------------------------------> 