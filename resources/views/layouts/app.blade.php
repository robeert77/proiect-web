<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Laravel App')</title>
    <link rel="icon" href="{{ asset('images/fav_icon.png') }}" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header class="bg-light">
        <div class="container">
            <div class="py-3 mb-4 border-bottom">
                <nav class="navbar navbar-expand-lg bg-body-tertiary">
                    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                        <img src="{{ asset('images/logo.png') }}" alt="Logo" width="102" height="78" class="d-inline-block align-text-top">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
                        <div class="navbar-nav">
                            <a class="nav-link {{ Route::currentRouteName() == 'home' ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
                            <a class="nav-link {{ Route::currentRouteName() == 'members.index' ? 'active' : '' }}" href="{{ route('members.index') }}">Members</a>
                            <a class="nav-link {{ Route::currentRouteName() == 'members.create' ? 'active' : '' }}" href="{{ route('members.create') }}">Add Member</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <main class="my-5">
        @yield('content')
    </main>

    <footer class="bg-light">
        <div class="container d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-6 mb-0 text-body-secondary">© 2024 Women Fintech</p>

            <a href="/" class="col-md-6 d-flex align-items-center justify-content-end mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="80" height="58" class="d-inline-block align-text-top">
            </a>
        </div>
    </footer>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
