<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            @if ($user->level == 'admin')
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Guru
                </a>
                <a class="nav-link" href="{{ route('dataKelas') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Kelas
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Mapel
                </a>
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Jurusan
                </a>
            @elseif($user->level == 'siswa')
                <a class="nav-link" href="">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Siswa
                </a>
                <a class="nav-link" href="{{ route('dataKelasUser') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Kelas
                </a>
            @endif
        </div>
    </div>
</nav>
