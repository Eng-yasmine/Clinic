<nav class="navbar navbar-expand-lg navbar-expand-md bg-blue sticky-top">
    <div class="container">
        <div class="navbar-brand">
            <a class="fw-bold text-white m-0 text-decoration-none h3" href="{{ route('home') }}">VCare</a>
        </div>

        <button class="navbar-toggler btn-outline-light border-0 shadow-none" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <div class="d-flex gap-3 flex-wrap justify-content-center" role="group">
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('home') }}">{{ __('Home') }}</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('user.majors') }}">{{ __('Majors') }}</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('user.doctors') }}">{{ __('Doctors') }}</a>
                <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('Admin.DashBoard') }}">{{ __('Dashboard') }}</a>

                <!-- زر تغيير اللغة -->
                <div class="dropdown">
                    <button class="btn btn-outline-light dropdown-toggle" type="button" id="langDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('Language') }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="langDropdown">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>

                @guest
                    <!-- لو مش مسجل دخول -->
                    <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('login') }}">{{ __('Login') }}</a>
                    <a type="button" class="btn btn-outline-light navigation--button" href="{{ route('register') }}">{{ __('Register') }}</a>
                @else
                    <!-- لو مسجل دخول -->
                    <div class="dropdown">
                        <button class="btn btn-outline-light dropdown-toggle" type="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item" href="{{ route('profile.edit') }}">{{ __('Profile') }}</a>
                            </li>
                            <li>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="dropdown-item">{{ __('Logout') }}</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endguest

            </div>
        </div>
    </div>
</nav>
