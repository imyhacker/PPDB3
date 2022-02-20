<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">
        
            <x-dcore.tengahan.edit_info :data="$data"/>
        </section>
      </div>
      <x-dcore.modal />
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />