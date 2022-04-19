<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        
        <x-dcore.tengahan.kontak :eb="$eb" :kontak="$kontak"/>
       
        </section>
        <section class="section">
        
        <x-dcore.tengahan.kontak_sudah_dibaca :es="$es"/>
       
        </section>
        <section class="section">
        
        <x-dcore.tengahan.kontak_dibalas :esb="$esb"/>
       
        </section>
      </div>
      <x-dcore.modal :tag="$tag"/>

      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />