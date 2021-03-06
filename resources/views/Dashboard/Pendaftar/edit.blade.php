<x-dcore.head />
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <x-dcore.nav />
      <x-dcore.sidebar />
      <div class="main-content">
        <section class="section">  
        <!-- MAIN OF CENTER CONTENT -->
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Edit Pendaftar</h4>
                </div>
                <div class="card-body">
                    <x-dcore.edit_formulir :gelombang="$gelombang" :jurusan="$jurusan" :data="$data"/>
                </div>
              </div>
            </div>
            
          </div>
        <!-- END OF CENTER CONTENT -->


        </section>
      </div>
      <x-dcore.modal :tag="$tag"/>
      <x-dcore.footer />
    </div>
  </div>
<x-dcore.script />