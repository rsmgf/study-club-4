<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="{{route('my.home')}}">MyHome</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="{{route('my.nama')}}">Nama</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('my.asal')}}">Asal Daerah</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('my.prodi')}}">Prodi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{route('my.angkatan')}}">Angkatan</a></li>
            </ul>
        </div>
    </div>
</nav>