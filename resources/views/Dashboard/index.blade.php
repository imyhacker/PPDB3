<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        <x-dcore.card 
        :j="$j" 
        :gelombang="$gelombang"
        :g1="$g1"
        :g2="$g2"
        :g3="$g3"
        :g4="$g4"
        :g5="$g5"
        :g6="$g6"
        />
  
        <!-- MAIN OF CENTER CONTENT -->
        <x-dcore.tengahan.pendaftar :pendaftar="$pendaftar"/>
        <!-- END OF CENTER CONTENT -->
        <x-dcore.tengahan.jurusan_fileinfo :jurusan="$jurusan" :finfo="$finfo"/>
        <x-dcore.tengahan.video :video="$video"/>
        <x-dcore.tengahan.slider :slider="$slider"/>

        <x-dcore.tengahan.akun_informasi :akun="$akun" :info="$info"/>

        </section>
      </div>
      <x-dcore.modal />
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />