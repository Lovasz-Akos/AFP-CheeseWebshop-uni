@guest
<li class="nav-item">
    <a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
@if (Route::has('register'))
<li class="nav-item">
    <a class="nav-link" href="{{ route('register') }}">Register</a>
</li>
@endif
@else
<li class="nav-item dropdown">
    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        {{ Auth::user()->name }}
    </a>

    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
        <!--suppress JSDeprecatedSymbols : jQuery has a problem with event.preventDefault(). TODO: (low) Fix it if you have time. -->
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            Logout
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
</li>
@endguest
