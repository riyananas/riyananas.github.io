<nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top text-white">
  <div class="container">
    <a class="navbar-brand" href="/"><img src="../img/logo.png" width="50em" height="50em" alt="gudangit.net"> <strong>GudangIT.net</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'home') ? 'active' : ''}}" href="/"><i class="bi bi-house-fill"></i> Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'about') ? 'active' : ''}}" href="/about"><i class="bi bi-file-person-fill"></i> About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'posts') ? 'active' : ''}}" href="/posts"><i class="bi bi-signpost-2"></i> Blog</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($active === 'categories') ? 'active' : ''}}" href="/categories"><i class="bi bi-bookmarks"></i> Categories</a>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto">
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Welcome back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <form action="/logout" method="post">
                @csrf
                <button type="submit" class="dropdown-item">Logout <i class="bi bi-box-arrow-right"></i></button>
              </form>
            </li>
          </ul>
        @else
        <li>
          <a href="/login" class="nav-link {{ ($active === 'login') ? 'active' : ''}}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
        </li>
        @endauth
      </ul>
    </div>   
  </div>
</nav>
