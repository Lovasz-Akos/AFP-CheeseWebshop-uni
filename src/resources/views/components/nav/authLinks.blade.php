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
    <li class="nav-item">
        <div class="dropdown">
            <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                {{ Auth::user()->name }}
            </button>

            <!-- TODO: Fix white characters! -->
            <ul class="dropdown-menu text-dark" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="#">Action</a></li> <!-- TODO: Remove examples if not needed -->
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><input class="dropdown-item" type="submit" form="logout-form" value="Logout" /></li>
            </ul>
        </div>
    </li>

    <form id="logout-form" name="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
@endguest
