{{-- NAVBAR START HERE --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #1A374D !important;">
    <div class="container">
        <a class="navbar-brand text-white" href="{{route('category.dashboard')}}"><i class="bi bi-people"></i> My Portfolio</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll"></ul>
            <ul class="navbar-nav navbar-nav-scroll">
                <li class="nav-item"><a class="nav-link active text-white" href="{{route('category.dashboard')}}">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="{{route('category.home')}}">Home</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="{{route('category.about')}}">About Us</a></li>
                <li class="nav-item"><a class="nav-link active text-white" href="{{route('category.help')}}">Help</a></li>

                {{--  LOGIN & CREATE ACCOUNT START HERE  --}}
                <li class="nav-item mt-2" style="margin-right: 20px; margin-left: 10px; text-decoration: none;">
                    @if (Route::has('login'))
                        <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                            @auth
                            @else
                                <a href="{{ route('login') }}" style="text-decoration: none; color:white; margin-right: 10px;">Login</a>
                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" style="text-decoration: none; color:white;">Create Account</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                </li>
                {{--  LOGIN & CREATE ACCOUNT END HERE  --}}

                {{--  PROFILE & LOGOUT START HERE  --}}
                <li>
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name ?? ' '}}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><button class="dropdown-item" type="button"><a href="{{route('category.profile_view_after_login')}}" style="text-decoration: none; color:black; margin-left:25px;">Profile</a></button></li>
                            <hr>
                            <li>
                                <button class="dropdown-item" type="button">
                                    <form method="POST" action="{{route('logout')}}">
                                    @csrf
                                        <x-dropdown-link :href="route('logout')"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();" style="text-decoration: none; color:black;">
                                            {{ __('Log Out') }}
                                        </x-dropdown-link>
                                    </form>
                                </button>
                            </li>
                        </ul>
                    </div>
                </li>
                {{--  PROFILE & LOGOUT END HERE  --}}
            </ul>
        </div>
    </div>
</nav>
{{-- NAVBAR END HERE--}}

















