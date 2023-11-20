<header>
    <ul class="nav-custom">

        <li class="nav-item-custom">
            <a class="{{Route::currentRouteName() === 'home' ? 'active' : ''}}  " href="{{route('home')}}">HOME</a>
        </li>

        <li class="nav-item-custom">
          <a class="{{Route::currentRouteName()=== 'thrillers' ? 'active' : ''}} " aria-current="page" href="{{route('thrillers')}}">Thriller</a>
        </li>

        <li class="nav-item-custom">
          <a class="{{Route::currentRouteName() === 'scienceFictions' ? 'active' : ''}} " href="{{route('scienceFictions')}}">Si-Fi</a>
        </li>

        <li class="nav-item-custom">
            <a class="{{Route::currentRouteName() === 'dramas' ? 'active' : ''}}  " href="{{route('dramas')}}">Drama</a>
        </li>

        <li class="nav-item-custom">
            <a class="{{Route::currentRouteName() === 'kids' ? 'active' : ''}}  " href="{{route('kids')}}">Per Bambini</a>
        </li>

      </ul>
</header>




























