<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        
        <x-dcore.tengahan.kontak :eb="$eb"/>
       
        </section>
        <section class="section">
        
        <x-dcore.tengahan.kontak_sudah_dibaca :esb="$esb"/>
       
        </section>
        <section class="section">
        
        <x-dcore.tengahan.kontak_dibalas :es="$es"/>
       
        </section>
      </div>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />