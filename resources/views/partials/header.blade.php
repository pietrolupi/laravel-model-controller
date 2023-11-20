<header>
    <ul class="nav">

        <li class="nav-item">
            <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}  nav-link" href="{{route('home')}}">HOME</a>
        </li>

        <li class="nav-item">
          <a class="{{Route::currentRouteName()=== 'thrillers' ? 'active' : ''}} nav-link active" aria-current="page" href="{{route('thrillers')}}">Thriller</a>
        </li>

        <li class="nav-item">
          <a class="{{Route::currentRouteName() === 'scienceFictions' ? 'active' : ''}} nav-link" href="{{route('scienceFictions')}}">Si-Fi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
</header>
