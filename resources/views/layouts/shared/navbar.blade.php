  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
 
    <ul class="navbar-nav ml-auto">
    @if(Auth::check())
      <li class="nav-item">
        <form action="{{ url('logout') }}" method="POST">
            @csrf
            <button class="nav-link"  role="button">
                <i class="fas fa-th-large">Logout</i>
            </button>
        </form> 
      </li>
    @endif 
    </ul>
  </nav>
  <!-- /.navbar -->
  
  