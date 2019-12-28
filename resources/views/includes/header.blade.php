

        <nav class="blue darken-2">
          <div class="container">
            <div class="nav-wrapper">
              <a href="index.html" class="brand-logo">Madmin</a>
              <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
                <i class="material-icons">menu</i>
              </a>
              <ul class="right hide-on-med-and-down">
                      @guest
                      <li class="nav-item">
                          <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                      </li>
                      <li class="nav-item">
                          @if (Route::has('register'))
                              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                          @endif
                      </li>
                  @else
                <li class="active">
                  <a href="index.html">Dashboard</a>
                </li>
                <li>
                  <a href="posts.html">Posts</a>
                </li>
                <li>
                  <a href="categories.html">Categories</a>
                </li>
                <li>
                  <a href="comments.html">Comments</a>
                </li>
                <li>
                  <a href="users.html">Users</a>
                </li>
                @endguest
              </ul>
              <!-- Side nav -->
              <ul id="side-nav" class="side-nav">
                <li>
                  <div class="user-view">
                    <div class="background">
                      <img src="img/ocean.jpg" alt="">
                    </div>
                    <a href="#">
                      <img src="img/person1.jpg" alt="" class="circle">
                    </a>
                    @if(Auth::user())
                    <a href="#">
                      <span class="name white-text">{{ Auth::user()->name }}</span>
                    </a>
                    <a href="#">

                      <span class="email white-text">{{ Auth::user()->email }}</span>

                    </a>
                  </div>
                </li>
                <li>
                  <a href="index.html">
                    <i class="material-icons">dashboard</i> Dashboard</a>
                </li>
                <li>
                  <a href="posts.html">Posts</a>
                </li>
                <li>
                  <a href="categories.html">Categories</a>
                </li>
                <li>
                  <a href="comments.html">Comments</a>
                </li>
                <li>
                  <a href="users.html">Users</a>
                </li>
                <li>
                  <div class="divider"></div>
                </li>
                <li>
                  <a class="subheader">Account Controls</a>
                </li>
                <li>
                <a class="dropdown-item waves-effect" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>


                </li>
                @else
                @guest
                <li >
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                <li class="nav-item">
                    @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    @endif
                </li>
                @endif

      @endguest
              </ul>
            </div>
          </div>
        </nav>

