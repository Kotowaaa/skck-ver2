<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
        {{-- Bootstrap 5.2 --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>SKCK | Surat Keterangan Catatan Kepolisian</title>
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg bg-dark sticky-top" style="width: auto;">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03"
                aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand text-white" href="#">SKCK</a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        {{-- Navigation User --}}
                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('creates') }}">| Satwil |</a>
                    </li>                      
                    @endif
                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('createsDiri') }}">| Data diri |</a>
                    </li>                      
                    @endif
                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('createsAyah') }}">| Data Ayah |</a>
                    </li>
                    @endif
                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('createsIbu') }}">| Data Ibu |</a>
                    </li>
                    @endif
                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('createsSKCK') }}">| SKCK |</a>
                    </li>
                    @endif

                    {{-- Navigation admin --}}

                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" aria-current="page" href="{{ route('satwils') }}">| Satwil |</a>
                    </li>                      
                    @endif
                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dataDiris') }}">| Data diri |</a>
                    </li>                      
                    @endif
                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dataAyahs') }}">| Data Ayah |</a>
                    </li>
                    @endif
                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('dataIbus') }}">| Data Ibu |</a>
                    </li>
                    @endif
                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('skck') }}">| SKCK |</a>
                    </li>
                    @endif

                    @if (auth()->user()->role_id == 2)
                    <li class="nav-item">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-white" style="position: relative; left: 700px;">
                            Logout
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="display-none">
                            @csrf
                        </form>
                    </li>
                    @endif

                    @if (auth()->user()->role_id == 1)
                    <li class="nav-item">
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-white" style="position: relative; left: 700px;">
                            Logout
                            <i class="fa-solid fa-arrow-right-from-bracket"></i>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" class="display-none">
                            @csrf
                        </form>
                    </li>
                    @endif 

                </ul>
            </div>
        </div>
    </nav>

    <div class="container mx-auto">
        @yield('content')
    </div>


    {{-- Bootstrap 5.2 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>
