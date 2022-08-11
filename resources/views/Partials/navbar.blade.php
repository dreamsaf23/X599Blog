<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
    <a class="navbar-brand text-white" href="/">X599 Blog</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-white" href="/">Home</a>
        </li>
        {{-- <li class="nav-item">
          <a class="nav-link text-white" href="/about">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/posts">Blog</a>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link text-white" href="/categories">Categories</a>
        </li>
        </ul>

      <ul class="navbar-nav ms-5">
      
        @auth
      
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
              @csrf

              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>

              </form>
          </ul>
        </li>
        
        @else

        <li class="nav-item">
          <a class="nav-link text-white" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth

      </ul>

      
    </div>
  </div>
</nav>
