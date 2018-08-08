<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">The Big Five</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i id="side-menu-icon" class="fa fa-list-ul"></i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="sass.html">Lion</a></li>
        <li><a href="badges.html">Rhino</a></li>
        <li><a href="collapsible.html">Elephant</a></li>
        <li><a href="collapsible.html">Hippopotamous</a></li>
        <li><a href="collapsible.html">Buffalo</a></li>
        @guest
            <li>
                <a  href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            <li class="nav-item">
                <a  href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @else
            <li>
                <a id="navbarDropdown" class=" dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="text-transform:capitalize">
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div>
  </nav>

  <ul class="sidenav" id="mobile-demo">
    <li><a href="sass.html">Sass</a></li>
    <li><a href="badges.html">Components</a></li>
    <li><a href="collapsible.html">Javascript</a></li>
    <li><a href="mobile.html">Mobile</a></li>
  </ul>