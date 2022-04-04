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
                  <h4>Area Cetak Data</h4>
                </div>
                <div class="card-body table-responsive">
                    <table class="table" id="table_id">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nomor Ujian</th>
                                <th>Nama</th>
                                <th>Asal Sekolah</th>
                                <th>NISN</th>
                                <th>Nomor HP</th>
                                <th>Minat</th>
                                <th>Gelombang</th>
                                <th>Rek</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $no = 1; @endphp
                            @foreach($data as $dt)
                                <tr>
                                    <td>{{$no++}}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
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