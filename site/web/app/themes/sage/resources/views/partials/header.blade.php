<header class="banner navbar navbar-expand-lg" aria-label="Navbar">
  <a class="brand" href="{{ home_url('/') }}">
    {{ $siteName }}
  </a>

  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  @include('partials.navigation')
</header>
