      <nav class="navbar fixed-nav navbar-expand navbar-light bg-light ">
        <div class="container-fluid">
          <div id="menu-toggle">
            <div id="nav-icon1">
              <span></span>
              <span></span>
              <span></span>
            </div>
          </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  @if(session('name'))
                    <span style="text-transform: capitalize">{{$user->name}}</span>
                  @endif
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-danger" href="{{route('logout')}}"><i class="fas fa-power-off mr-1"></i> Logout</a>
                  </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>