<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="/">SMK MUTU</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('siswa') }}">Siswa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('guru') }}">Guru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('mapel') }}">Mapel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kelas') }}">Kelas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jurusan') }}">Jurusan</a>
                </li>
            </ul>
            <div class="d-flex">
                <a class="btn btn-outline-success" href="{{ route('login') }}">Login</a>
            </div>
        </div>
    </div>
</nav>
