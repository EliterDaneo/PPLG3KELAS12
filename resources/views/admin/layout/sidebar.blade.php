<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @if ($user->level == 'admin')
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ route('dataSiswa.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="{{ route('dataGuru.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Guru
                </a>
                <a class="nav-link" href="{{ route('dataKelas.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Kelas
                </a>
                <a class="nav-link" href="{{ route('dataMapel.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Mapel
                </a>
                <a class="nav-link" href="{{ route('dataJurusan.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Jurusan
                </a>
            @elseif($user->level == 'siswa')
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="/dashboard">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="{{ route('dataSiswaUser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="{{ route('dataGuruUser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Guru
                </a>
                <a class="nav-link" href="{{ route('dataKelasUser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Kelas
                </a>
                <a class="nav-link" href="{{ route('dataMapelUser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Mapel
                </a>
                <a class="nav-link" href="{{ route('dataJurusanUser.index') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Jurusan
                </a>
            @endif
        </div>
    </div>
</nav>
