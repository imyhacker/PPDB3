<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
        </div>
        <ul class="sidebar-menu">
            
            <li class="menu-header">Main Dashboard</li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>Data PPDB</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link beep beep-sidebar" href="#" data-toggle="modal" data-target="#tJurusan">Tambah Jurusan</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="#" data-toggle="modal" data-target="#tGelombang">Tambah Gelombang</a></li>
                    <li><a class="nav-link" href="{{route('pendaftar')}}">Tambah Pendaftar</a></li>
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tfInfo">Tambah File Informasi</a></li>
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tyt">Tambah Video (YT)</a></li>
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tSlider">Tambah Slider Depan</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{route('cetak_data')}}">Area Cetak</a></li>
                    <li><a class="nav-link beep beep-sidebar" href="{{route('acc_data')}}">Area Acc</a></li>

                </ul>
            </li>
            <li class="dropdown active">
                <a href="#" class="nav-link has-dropdown"><i class="far fa-file-alt"></i> <span>Data Sekolah</span></a>
                <ul class="dropdown-menu">
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tAkun">Guru</a></li>
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tInfo">Informasi</a></li>
                    <li><a class="nav-link" href="#" data-toggle="modal" data-target="#tTag">Tag Informasi</a></li>
                
                    <li><a class="nav-link" href="{{route('tentang_sekolah')}}">Tentang Sekolah</a>
                    <li><a class="nav-link" href="{{route('setting')}}">Setting Sekolah</a>

                    </li>
                </ul>
            </li>
            
        </ul>

        <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
            <a href="https://getstisla.com/docs" class="btn btn-primary btn-lg btn-block btn-icon-split">
                <i class="fas fa-rocket"></i> Documentation
            </a>
        </div>
   

    </aside>
</div>
