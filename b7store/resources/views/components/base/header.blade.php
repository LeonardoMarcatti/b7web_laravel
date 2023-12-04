<header>
      <div class="header-area">
        <a href="" class="header-area-left">B7Store</a>
        @if(Auth::check())
        <div class="header-area-right">
          <a href="{{route('myAccount')}}" class="my-account">
            <img src="{{URL::asset('assets/icons/userIcon.png')}}" />
            {{Auth::user()->name}}
          </a>
          <a href="" class="announce-now">Anunciar agora →</a>
          <img class="menu-icon" src="{{URL::asset('assets/icons/menuIcon.png')}}" alt="Menu" />
          <div class="menu-mobile">
            <a href="myAccount.html" class="my-account-mobile">
              <img src="{{URL::asset('assets/icons/userIcon.png')}}" alt="Ícone do usuário" />
              Minha Conta
            </a>
            <a class="my-account-mobile" href="/index.html"
              ><img src="{{URL::asset('assets/icons/logoutIcon.png')}}" /> Sair</a
            >
          </div>
        </div>
        @else
            <a href="{{route('login')}}" class="my-account">
                <img src="{{URL::asset('assets/icons/userIcon.png')}}" />
                Login
            </a>
        @endif
      </div>
    </header>
