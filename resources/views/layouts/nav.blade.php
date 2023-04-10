      <nav class="navbar navbar-light navbar-expand-md fixed-top" style="background: rgb(57,138,185);">
        <div class="container">
          <a class="navbar-brand" href="{{('/')}}">
            SharingApp
          </a>
          <button data-bs-toggle="collapse" class="navbar-toggler rounded-0 border-0" data-bs-target="#navcol-1">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
          </button>
            <div class="collapse navbar-collapse" id="navcol-1">
                
                <ul class="navbar-nav ms-auto">
                  @auth
                  @if (Route::has('login'))
                    <li class="nav-item">
                      <a class="nav-link active" href="{{('/home')}}">
                        <i class="fas fa-home"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active" href=" {{('posts.create')}}">
                        <i class="fas fa-upload"></i>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="profile/edit.html">
                        <i class="fas fa-bell"></i>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}
                      </a>
                        <div class="dropdown-menu">
                          <a class="dropdown-item" href="privacy.html">
                            <i class="fas fa-edit"></i>
                            EditProfile
                          </a>
                          <a class="dropdown-item" href="#">
                            <i class="fas fa-cog"></i>
                            Settings
                          </a>
                          
                          <a class="dropdown-item" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fas fa-lock"></i>
                            Logout
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                          </form>
                          
                        </div>
                    </li>
                    
                  
                  @endauth
                    
                    @else
                    <li class="nav-item">
                      <a class="nav-link" href="{{asset('/login')}}">
                        Login
                      </a>
                    </li>
                  @endif
                </ul>
            </div>
        </div>
      </nav>
    <!--End Navbar Comment-->

